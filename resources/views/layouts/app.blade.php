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
        <nav class="bg-white shadow">
            <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-18">
                    <div class="flex">
                        <div class="-ml-2 mr-2 flex items-center md:hidden">
                            <!-- Mobile menu button -->
                            <button type="button"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                            <img class="block lg:hidden h-8 w-auto" src="{{ asset('images/logo_long.png') }}"
                                alt="Workflow">
                            <img class="hidden lg:block h-8 w-auto" src="{{ asset('images/logo_long.png') }}"
                                alt="LecacyArT">
                        </a>
                        <div class="hidden md:ml-10 md:flex md:space-x-8">
                            @auth
                                @can('admin')
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
                                <button type="button"
                                    class="relative inline-flex items-center px-4 pt-2 pb-2.5 border border-transparent font-semibold rounded-md text-white bg-emerald-400 shadow-sm hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400">
                                    <!-- Heroicon name: solid/plus -->
                                    <svg class="-ml-1 mr-2 -mb-0.5 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Create</span>
                                </button>
                            </div>
                        @endcan
                        <div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <button type="button"
                                        class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <span class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-200">
                                            @guest
                                                <svg class="h-full w-full text-gray-400" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            @else
                                                @can('from-google')
                                                    <img src="{{ Auth::user()->profile_image }}" alt=""
                                                        class="h-full w-auto object-cover">
                                                @else
                                                    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt=""
                                                        class="h-full w-auto object-cover">
                                                @endcan
                                            @endguest
                                        </span>
                                    </button>
                                </div>
                                <div class="hidden origin-top-right absolute right-0 w-56 rounded-md shadow-lg mt-2 py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    id="profile-dropdown" role="menu" aria-orientation="vertical"
                                    aria-labelledby="user-menu-button" tabindex="-1">
                                    @guest
                                        <a href="{{ route('login') }}"
                                            class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-0">Login</a>
                                        <a href="{{ route('register') }}"
                                            class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-0">Register</a>
                                    @else
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
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
                    <a href="#"
                        class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Dashboard</a>
                    <a href="#"
                        class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Team</a>
                    <a href="#"
                        class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Projects</a>
                    <a href="#"
                        class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Calendar</a>
                </div>
                <div class="group pt-4 pb-3 border-t border-gray-200">
                    <div class="flex items-center px-4 sm:px-6">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=nkXPoOrIl0&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-gray-800">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-500">tom@example.com</div>
                        </div>
                        <button
                            class="ml-auto flex-shrink-0 bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden group-hover:block mt-3 space-y-1">
                        <a href="#"
                            class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 sm:px-6">Your
                            Profile</a>
                        <a href="#"
                            class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 sm:px-6">Settings</a>
                        <a href="#"
                            class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 sm:px-6">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>

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
