<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <nav class="bg-white shadow md:fixed w-full top-0">
            <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-18">
                    <div class="flex">
                        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                            <img class="block lg:hidden h-8 w-auto" src="{{ asset('images/logo_long.png') }}"
                                alt="Workflow">
                            <img class="hidden lg:block h-8 w-auto" src="{{ asset('images/logo_long.png') }}"
                                alt="LecacyArT">
                        </a>
                        <div class="hidden md:ml-10 md:flex md:space-x-8">
                            @auth
                                @can('view-revenue')
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 font-bold">
                                        View Revenue
                                    </a>
                                @else
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 font-bold">
                                        Bids
                                    </a>
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 font-bold">
                                        Transactions
                                    </a>
                                @endcan
                            @endauth
                        </div>
                    </div>
                    <div class="flex items-center">
                        @can('can-create')
                            <div class="flex-shrink-0">
                                <a href="{{ route('create.art') }}"
                                    class="relative inline-flex items-center px-4 pt-2 pb-2.5 border border-transparent font-semibold rounded-md text-white bg-emerald-400 shadow-sm hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400">
                                    <!-- Heroicon name: solid/plus -->
                                    <svg class="-ml-1 mr-2 -mb-0.5 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Create</span>
                                </a>
                            </div>
                        @endcan
                        <div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">
                            @guest
                                <a href="{{ route('login') }}"
                                    class="inline-flex items-center px-4 py-2 border-2 border-emerald-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                    Login
                                </a>
                                <a href="{{ route('register') }}"
                                    class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-400 hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400">
                                    Register
                                </a>
                            @else
                                <!-- Profile dropdown -->
                                <div class="ml-3 relative">
                                    <div>
                                        <button type="button"
                                            class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <span class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-200">
                                                @can('from-google')
                                                    <img src="{{ Auth::user()->profile_image }}" alt=""
                                                        class="h-full w-auto object-cover">
                                                @else
                                                    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt=""
                                                        class="h-full w-auto object-cover">
                                                @endcan
                                            </span>
                                        </button>
                                    </div>
                                    <div class="hidden origin-top-right absolute right-0 w-56 rounded-md shadow-lg mt-2 py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        id="profile-dropdown" role="menu" aria-orientation="vertical"
                                        aria-labelledby="user-menu-button" tabindex="-1">
                                        <a href="" class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1" id="user-menu-item-0">My Profile</a>
                                        <a href="{{ route('logout') }}"
                                            class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700"
                                            onclick="event.preventDefault();
                                                                                                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="hidden">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="fixed bottom-0 md:hidden h-18 mb-1 w-full" id="mobile-menu">
                @guest
                    <div class="h-16 w-11/12 mx-auto shadow-lg rounded-lg bg-white grid grid-cols-2">
                        <a href="{{ route('home') }}"
                            class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 ml-2 mr-1 rounded-md text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </a>
                        <a href="{{ route('user.profile', "@".Auth::user()->nickname) }}"
                            class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                        </a>
                    </div>
                @else
                    @can('view-revenue')
                        <div class="h-16 w-11/12 mx-auto shadow-lg rounded-lg bg-white grid grid-cols-3">
                            <a href="{{ route('home') }}"
                                class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 ml-2 mr-1 rounded-md text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </a>
                            <a href="{{ '/revenue' }}"
                                class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                            <a href="{{ route('user.profile', "@".Auth::user()->nickname) }}"
                                class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                                <div class="h-6 w-6 rounded-full overflow-hidden bg-gray-50">
                                    @can('from-google')
                                        <img src="{{ Auth::user()->profile_image }}" alt="" class="h-full w-auto object-cover">
                                    @else
                                        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt=""
                                            class="h-full w-auto object-cover">
                                    @endcan
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="h-16 w-11/12 mx-auto shadow-lg rounded-lg bg-white grid grid-cols-4">
                            <a href="{{ route('home') }}"
                                class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 ml-2 mr-1 rounded-md text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </a>
                            <a href="{{ '/bid' }}"
                                class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                                <x-ri-auction-line class="h-6 w-6"/>
                            </a>
                            <a href="{{ '/transaction' }}"
                                class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </a>
                            <a href="{{ route('user.profile', "@".Auth::user()->nickname) }}"
                                class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                                <div class="h-6 w-6 rounded-full overflow-hidden bg-gray-50">
                                    @can('from-google')
                                        <img src="{{ Auth::user()->profile_image }}" alt="" class="h-full w-auto object-cover">
                                    @else
                                        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt=""
                                            class="h-full w-auto object-cover">
                                    @endcan
                                </div>
                            </a>
                        </div>
                    @endcan
                @endguest
            </div>
        </nav>

        <div class="md:h-18"></div>
        @yield('content')
    </div>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#user-menu-button').click(function() {
                $('#profile-dropdown').toggleClass('hidden');
            });
        });
    </script>
</body>

</html>
