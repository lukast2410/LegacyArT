@extends('layouts.app')

@section('content')
    <header class="w-full bg-white shadow shadow-md">
        <div class="h-72 bg-emerald-400">
            @if ($user->creator)
                <img src="{{ asset('storage/' . $user->creator->banner_image) }}" alt="Banner"
                    class="h-full w-full object-cover object-center">
            @endif
        </div>
        <div class="relative">
            <div class="absolute left-1/2 -translate-x-1/2 -translate-y-1/2 h-36 w-36 bg-emerald-300 rounded-full p-1">
                @can('from-google')
                    <img src="{{ $user->profile_image }}" alt="Profile Image" class="w-full h-full rounded-full overflow-hidden">
                @else
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="w-full h-full rounded-full overflow-hidden">
                @endcan
            </div>
        </div>
        <div class="w-full px-6 sm:px-8 sm:text-center pt-20 bg-white">
            <h1 class="text-3xl font-bold mt-2">{{ $user->name }}</h1>
            <div class="mt-1">
                <span
                    class="text-lg font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-700 to-emerald-400">{{ '@' . $user->nickname }}</span>
            </div>
            @can('profile-owner', $user)
                @can('verify')
                    <button type="button"
                        class="mt-2 inline-flex items-center px-2 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm bg-red-400 text-white hover:bg-red-600 focus:outline-none"
                        onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-1 font-bold">Email not verified</span>
                    </button>
                    <form id="resend-verification-form" method="POST" action="{{ route('resend.verification') }}"
                        class="hidden">
                        @csrf
                    </form>
                @else
                    <div class="mt-2 inline-flex items-center text-sm font-medium text-emerald-500 focus:outline-none">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-1 font-bold">Email verified</span>
                    </div>
                @endcan
            @endcan
            <h3 class="mt-2 text-lg text-gray-600 font-medium">Joined {{ date_format($user->created_at, 'M d, Y') }}</h3>
            @if ($user->creator)
                <div class="mt-2 flex justify-center items-center">
                    <p
                        class="max-w-screen-sm w-full mx-6 sm:mx-8 text-sm font-semibold text-emerald-700 border-t-2 border-emerald-400 pt-2">
                        {{ $user->creator->bio }}
                    </p>
                </div>
            @endif
        </div>
        <nav
            class="mt-8 sm:mt-6 w-full max-w-screen-2xl px-6 sm:px-8 mx-auto flex sm:space-x-2 justify-between items-start sm:items-center flex-col-reverse sm:flex-row">
            <div class="flex space-x-2 flex-1 w-full sm:w-min">
                <div id="profile-collected-art"
                    class="flex flex-1 sm:flex-none items-center justify-center space-x-2 px-4 py-3 cursor-pointer border-b-4 border-transparent border-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <span class="font-semibold text-lg">Collected</span>
                    <span
                        class="bg-emerald-100 text-emerald-700 py-0.5 px-2 rounded-full text-xs font-medium inline-block">{{ count($user->arts) }}</span>
                </div>
                @if ($user->creator)
                    <div id="profile-created-art"
                        class="flex flex-1 sm:flex-none items-center justify-center space-x-2 px-4 py-3 cursor-pointer border-b-4 border-transparent hover:border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="font-semibold text-lg">Created</span>
                        <span
                            class="bg-emerald-100 text-emerald-700 py-0.5 px-2 rounded-full text-xs font-medium inline-block">{{ count($user->creator->arts) }}</span>
                    </div>
                @endif
            </div>
            @can('can-request', $user)
                @if ($user->requests()->where('status', 'Pending')->count() == 0)
                    <a href="{{ route('request.creator') }}"
                        class="w-full sm:w-fit sm:ml-4 mb-4 sm:mb-0 inline-flex items-center px-4 py-2 border border-emerald-500 sm:border-transparent text-base font-medium rounded-md sm:shadow-sm text-emerald-700 sm:text-white hover:bg-gray-100 sm:bg-emerald-400 sm:hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                        </svg>
                        Upgrade to Creator
                    </a>
                @endif
                <a href="{{ route('my.request') }}"
                    class="w-full sm:w-fit sm:ml-4 mb-2 sm:mb-0 inline-flex items-center px-4 py-2 border border-emerald-500 sm:border-transparent text-base font-medium rounded-md sm:shadow-sm text-emerald-700 sm:text-white hover:bg-gray-100 sm:bg-emerald-400 sm:hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                    My Requests
                </a>
            @endcan
        </nav>
    </header>
    <main class="w-full max-w-screen-2xl sm:mx-auto">
        <div class="w-full px-6 sm:px-8">
            <section id="collected" class="py-8">
                @if (count($user->arts) == 0)
                    <div class="w-full max-w-screen-2xl mx-auto">
                        <div class="w-full bg-emerald-200 text-center rounded-lg px-4 py-10 mb-4">
                            <h1 class="text-emerald-700 text-base sm:text-2xl font-bold">
                                There are no collected art yet
                            </h1>
                            <a href="{{ route('home') }}"
                                class="text-emerald-600 text-sm sm:text-base font-medium hover:text-emerald-700">
                                Let's buy some art.
                            </a>
                        </div>
                    </div>
                @else
                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8">
                        @foreach ($user->arts as $art)
                            <x-art-card :art="$art" />
                        @endforeach
                    </div>
                @endif
            </section>
            @if ($user->creator)
                <section id="created" class="py-8 hidden">
                    @if (count($user->creator->arts) == 0)
                        <div class="w-full max-w-screen-2xl mx-auto">
                            <div class="w-full bg-emerald-200 text-center rounded-lg px-4 py-10 mb-4">
                                <h1 class="text-emerald-700 text-base sm:text-2xl font-bold">
                                    There are no created art yet
                                </h1>
                                <a href="{{ route('create.art') }}"
                                    class="text-emerald-600 text-sm sm:text-base font-medium hover:text-emerald-700">
                                    Let's create some art.
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8">
                            @foreach ($user->creator->arts as $art)
                                <x-art-card :art="$art" />
                            @endforeach
                        </div>
                    @endif
                </section>
            @endif
        </div>
    </main>
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
