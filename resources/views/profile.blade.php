@extends('layouts.app')

@section('content')
    <header class="w-full bg-white shadow shadow-md">
        <div class="h-72">
            <img src="{{ asset('storage/' . $user->creator->banner_image) }}" alt="Banner"
                class="h-full w-full object-cover object-center">
        </div>
        <div class="relative">
            <div class="absolute left-1/2 -translate-x-1/2 -translate-y-1/2 h-36 w-36 bg-emerald-300 rounded-full p-1">
                <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image"
                    class="w-full h-full rounded-full overflow-hidden">
            </div>
        </div>
        <div class="w-full text-center pt-20 bg-white">
            <h1 class="text-3xl font-bold mt-2">{{ $user->name }}</h1>
            <div class="mt-1">
                <span
                    class="text-lg font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-700 to-emerald-400">{{ '@' . $user->nickname }}</span>
            </div>
            <h3 class="mt-2 text-lg text-gray-600 font-medium">Joined {{ date_format($user->created_at, 'M d, Y') }}</h3>
            @if ($user->creator)
                <div class="mt-2 flex justify-center items-center">
                    <p class="max-w-screen-sm w-full px-8 text-sm font-semibold text-emerald-700 border-t-2 border-emerald-400 pt-2">{{ $user->creator->bio }}
                    </p>
                </div>
            @endif
        </div>
        <nav class="mt-3 w-full max-w-screen-2xl px-6 sm:px-8 mx-auto flex space-x-2">
            <div class="flex items-center space-x-2 px-4 py-3 cursor-pointer border-b-4 border-transparent border-emerald-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span class="font-semibold text-lg">Collected</span>
                <span class="text-sm font-medium text-gray-500">{{ count($user->arts) }}</span>
            </div>
            <div class="flex items-center space-x-2 px-4 py-3 cursor-pointer border-b-4 border-transparent hover:border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="font-semibold text-lg">Created</span>
                <span class="text-sm font-medium text-gray-500">{{ count($user->creator->arts) }}</span>
            </div>
        </nav>
    </header>
    <main class="w-full max-w-screen-2xl sm:mx-auto">
        <div class="w-full px-6 sm:px-8">
            <section id="collected" class="py-8">
                <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8">
                    @foreach ($user->arts as $art)
                        <div
                            class="h-full min-h-min flex flex-col bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            <a class="min-h-3/5" href="{{ route('art.detail', $art->id) }}">
                                <img class="w-full h-full object-cover bg-emerald-100"
                                    src="{{ asset('storage/' . $art->art_image) }}" alt="Art Image">
                            </a>
                            <div class="w-full flex-1 pt-3 px-5 pb-5">
                                <a href="{{ route('art.detail', $art->id) }}"
                                    class="block text-2xl font-bold text-emerald-800 truncate">{{ $art->name }}</a>
                                <div class="flex mt-3">
                                    <a href="{{ route('user.profile', '@' . $art->creator->user->nickname) }}"
                                        class="flex space-x-2 items-center text-gray-500 hover:text-gray-700">
                                        <img class="h-8 w-8 rounded-full overflow-hidden object-cover"
                                            src="{{ asset('storage/' . $art->creator->user->profile_image) }}"
                                            alt="Creator Profile">
                                        <span class="font-bold">{{ '@' . $art->creator->user->nickname }}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-emerald-800 w-full py-4 px-5 text-white flex justify-between">
                                <a href="{{ route('art.detail', $art->id) }}" class="flex-1 mr-3">
                                    <h3 class="text-emerald-400 font-medium">Start bid</h3>
                                    <h2 class="text-xl font-semibold">{{ number_format(floor($art->start_price)) . (count(explode('.', $art->start_price)) == 2 ? '.'.explode('.', $art->start_price)[1] : '') }} ETH</h2>
                                </a>
                                @if ($art->owner)
                                    <div class="text-right">
                                        <a href="{{ route('art.detail', $art->id) }}">
                                            <h3 class="text-emerald-400 font-medium">Owned by</h3>
                                        </a>
                                        <a href="{{ route('user.profile', '@'.$art->owner->nickname) }}" class="text-gray-300 hover:text-white">
                                            <h2 class="text-md leading-8 font-semibold">{{ "@".$art->owner->nickname }}</h2>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section id="created" class="py-8">
                <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8">
                    @foreach ($user->creator->arts as $art)
                        <div
                            class="h-full min-h-min flex flex-col bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            <a class="min-h-3/5" href="{{ route('art.detail', $art->id) }}">
                                <img class="w-full h-full object-cover bg-emerald-100"
                                    src="{{ asset('storage/' . $art->art_image) }}" alt="Art Image">
                            </a>
                            <div class="w-full flex-1 pt-3 px-5 pb-5">
                                <a href="{{ route('art.detail', $art->id) }}"
                                    class="block text-2xl font-bold text-emerald-800 truncate">{{ $art->name }}</a>
                                <div class="flex mt-3">
                                    <a href="{{ route('user.profile', '@' . $art->creator->user->nickname) }}"
                                        class="flex space-x-2 items-center text-gray-500 hover:text-gray-700">
                                        <img class="h-8 w-8 rounded-full overflow-hidden object-cover"
                                            src="{{ asset('storage/' . $art->creator->user->profile_image) }}"
                                            alt="Creator Profile">
                                        <span class="font-bold">{{ '@' . $art->creator->user->nickname }}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-emerald-800 w-full py-4 px-5 text-white flex justify-between">
                                <a href="{{ route('art.detail', $art->id) }}" class="flex-1 mr-3">
                                    <h3 class="text-emerald-400 font-medium">Start bid</h3>
                                    <h2 class="text-xl font-semibold">{{ number_format(floor($art->start_price)) . (count(explode('.', $art->start_price)) == 2 ? '.'.explode('.', $art->start_price)[1] : '') }} ETH</h2>
                                </a>
                                @if ($art->owner)
                                    <div class="text-right">
                                        <a href="{{ route('art.detail', $art->id) }}">
                                            <h3 class="text-emerald-400 font-medium">Owned by</h3>
                                        </a>
                                        <a href="{{ route('user.profile', '@'.$art->owner->nickname) }}" class="text-gray-300 hover:text-white">
                                            <h2 class="text-md leading-8 font-semibold">{{ "@".$art->owner->nickname }}</h2>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
