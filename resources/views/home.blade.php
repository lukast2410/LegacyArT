@extends('layouts.app')

@section('content')
    <header
        class="w-full min-h-full-without-nav py-6 sm:py-12 lg:py-0 bg-gradient-to-b from-emerald-50 to-emerald-200 flex items-center px-6 sm:px-0">
        <div
            class="w-full max-w-screen-2xl mx-auto h-5/6 grid grid-cols-1 lg:grid-cols-2fr gap-y-4 sm:gap-y-12 gap-x-8 lg:gap-x-16 sm:px-10">
            <div class="h-full flex items-center justify-center">
                <img class="w-full h-full max-h-full lg:max-h-screen-60 object-contain object-center drop-shadow-xl"
                    src="{{ asset('storage/' . $newest->art_image) }}" alt="Newest Art">
            </div>
            <div class="relative flex flex-col justify-center items-start space-y-4 sm:space-y-6">
                <h1 class="text-4.5xl sm:text-6xl font-bold text-emerald-800 leading-tight">
                    {{ $newest->name }}
                </h1>
                <div class="space-y-1">
                    <h3 class="text-lg font-semibold text-emerald-600">
                        Created by
                    </h3>
                    <a href="{{ route('user.profile', '@' . $newest->creator->user->nickname) }}"
                        class="block flex items-center p-2 bg-emerald-100 rounded-full shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
                        <div class="h-8 w-8 rounded-full overflow-hidden bg-gray-50">
                            @can('from-google', $newest->creator->user)
                                <img src="{{ $newest->creator->user->profile_image }}" alt="Creator Profile from Google"
                                    class="h-full w-full object-cover">
                            @else
                                <img src="{{ asset('storage/' . $newest->creator->user->profile_image) }}"
                                    alt="Creator Profile from storage" class="h-full w-full object-cover object-center">
                            @endcan
                        </div>
                        <span class="text-emerald-800 font-bold px-3">{{ '@' . $newest->creator->user->nickname }}</span>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0">
                    <div class="space-y-1 sm:pr-4 sm:mr-4 sm:border-r-2 border-green-300">
                        @if ($currentBid)
                            <h3 class="text-lg font-semibold text-emerald-600">
                                Current bid
                            </h3>
                            <h2 class="text-2xl sm:text-4xl font-semibold text-emerald-800 leading whitespace-nowrap">
                                {{ number_format(floor($currentBid->amount)) .(count(explode('.', $currentBid->amount)) == 2 ? '.' . explode('.', $currentBid->amount)[1] : '') }}
                                ETH</h2>
                        @else
                            <h3 class="text-lg font-semibold text-emerald-600">
                                Start bid
                            </h3>
                            <h2 class="text-2xl sm:text-4xl font-semibold text-emerald-800 leading whitespace-nowrap">
                                {{ number_format(floor($newest->start_price)) .(count(explode('.', $newest->start_price)) == 2 ? '.' . explode('.', $newest->start_price)[1] : '') }}
                                ETH</h2>
                        @endif
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-semibold text-emerald-600">
                            Created at
                        </h3>
                        <h2 class="text-2xl sm:text-4xl font-semibold text-emerald-800 leading whitespace-nowrap">
                            {{ date_format($newest->created_at, 'M d, Y') }}</h2>
                    </div>
                </div>
                <a href="{{ route('art.detail', $newest->id) }}"
                    class="inline-flex justify-center items-center w-full lg:max-w-sm px-6 py-3 border border-transparent text-lg font-medium rounded-lg shadow-sm text-white transition-all bg-emerald-800 hover:shadow-lg hover:-translate-y-0.5 focus:outline-none">
                    View Artwork
                </a>
            </div>
        </div>
    </header>
    <div class="w-full bg-emerald-200 sm:-mt-5 lg:-mt-8">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
            <path fill="#f4f5f7" fill-opacity="1"
                d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,170.7C960,160,1056,96,1152,64C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
    <main class="w-full max-w-screen-2xl sm:mx-auto">
        <div class="w-full px-6 sm:px-8">
            <h1 class="w-full text-4xl sm:text-4.5xl font-bold text-emerald-800 leading-tight text-center">
                Creators
            </h1>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 xl:gap-8 my-12">
                @foreach ($creators as $creator)
                    <a href="{{ route('user.profile', '@' . $creator->user->nickname) }}"
                        class="block relative bg-white rounded-lg overflow-hidden shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
                        @can('from-google', $creator->user)
                            <img src="{{ $creator->user->profile_image }}" alt="Creator Profile from Google"
                                class="w-full h-full object-cover object-center">
                        @else
                            <img src="{{ asset('storage/' . $creator->user->profile_image) }}"
                                alt="Creator Profile from storage" class="h-full w-full object-cover object-center">
                        @endcan
                        <div
                            class="absolute left-0 top-0 w-full h-full bg-black-trans flex items-end text-gray-50 font-semibold">
                            <span class="m-3 py-2 px-3 bg-black rounded-lg">
                                {{ '@' . $creator->user->nickname }}
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="w-full px-6 sm:px-10">
            <h1 class="w-full text-4xl sm:text-4.5xl font-bold text-emerald-800 leading-tight text-center">
                Featured Artworks
            </h1>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8 my-12">
                @foreach ($arts as $art)
                    <x-art-card :art="$art" />
                @endforeach
            </div>
        </div>
    </main>
@endsection
