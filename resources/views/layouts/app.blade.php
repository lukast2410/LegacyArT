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
        <nav class="bg-white shadow md:fixed md:z-50 w-full top-0">
            <div class="max-w-screen-2xl mx-auto px-6 sm:px-8">
                <div class="flex justify-between h-18">
                    <div class="flex">
                        {{-- TODO: Redirect to home --}}
                        <a href="" class="flex-shrink-0 flex items-center">
                            <img class="block h-8 w-auto" src="{{ asset('images/logo_long.png') }}" alt="LecacyArT">
                        </a>
                        <div class="hidden md:ml-10 md:flex md:space-x-8">
                            {{-- TODO: If user is an admin, Provide Revenues and Requests menu --}}
                            {{-- TODO: Redirect to Revenue Page --}}
                            <a href=""
                                class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 font-bold">
                                Revenues
                            </a>
                            {{-- TODO: Redirect to View Request Page --}}
                            <a href=""
                                class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 font-bold">
                                Requests
                            </a>
                            {{-- TODO: For logged in user except admin, Provide Bids and Transactions menu --}}
                            {{-- TODO: Redirect to Bid Ongoing Page --}}
                            <a href=""
                                class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 font-bold">
                                Bids
                            </a>
                            {{-- TODO: Redirect to Buy Transaction History Page --}}
                            <a href=""
                                class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 font-bold">
                                Transactions
                            </a>
                            {{-- END --}}
                        </div>
                    </div>
                    <div class="flex items-center">
                        {{-- TODO: If user is a creator --}}
                        <div class="flex-shrink-0">
                            {{-- TODO: Redirect to Create Art Page --}}
                            <a href=""
                                class="relative inline-flex items-center px-4 pt-2 pb-2.5 border border-transparent font-semibold rounded-md text-white bg-emerald-400 shadow-sm hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400">
                                <svg class="-ml-1 mr-2 -mb-0.5 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Create</span>
                            </a>
                        </div>
                        {{-- END --}}
                        <div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">
                            {{-- TODO: If the user is a guest --}}
                            <a href="{{ route('login') }}"
                                class="inline-flex items-center px-4 py-2 border-2 border-emerald-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                Login
                            </a>
                            <a href="{{ route('register') }}"
                                class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-400 hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400">
                                Register
                            </a>
                            {{-- TODO: If the user is not a guest --}}
                            <div class="ml-3 relative">
                                <div>
                                    <button type="button"
                                        class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <span class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-200">
                                            {{-- TODO: If user from google, get profile image from the url --}}
                                            <img src="" alt="Google Profile Image" class="h-full w-full object-cover">
                                            {{-- TODO: If user is not from google, get profile image from storage --}}
                                            <img src="" alt="Profile Image from Storage"
                                                class="h-full w-full object-cover object-center">
                                            {{-- END --}}
                                        </span>
                                    </button>
                                </div>
                                <div class="hidden origin-top-right absolute right-0 w-56 rounded-md shadow-lg mt-2 py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    id="profile-dropdown" role="menu" aria-orientation="vertical"
                                    aria-labelledby="user-menu-button" tabindex="-1">
                                    {{-- TODO: If user's email not verified --}}
                                    <button type="button"
                                        class="flex w-52 rounded-md bg-red-100 p-2 mx-2 my-2 hover:bg-red-200"
                                        onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-red-800">
                                                Verify Email
                                            </h3>
                                        </div>
                                    </button>
                                    {{-- TODO: Resent Email Verification Action --}}
                                    <form id="resend-verification-form" method="POST" action="" class="hidden">
                                        @csrf
                                    </form>
                                    {{-- TODO: If user's email already verified --}}
                                    <div class="flex w-52 rounded-md bg-green-100 p-2 mx-2 my-2">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-green-800">
                                                Email Verified
                                            </h3>
                                        </div>
                                    </div>
                                    {{-- END --}}

                                    {{-- TODO: Redirect to User Profile Page --}}
                                    <a href="" class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0">My Profile</a>
                                    <a href="{{ route('logout') }}"
                                        class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                            {{-- END --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile View --}}
            <div class="fixed bottom-0 md:hidden h-18 mb-1 w-full z-50" id="mobile-menu">
                {{-- TODO: If user is a guest --}}
                <div class="h-16 w-11/12 mx-auto shadow-lg rounded-lg bg-white grid grid-cols-2">
                    {{-- TODO: Redirect to home --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 ml-2 mr-1 rounded-md text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
                    <a href="{{ route('login') }}"
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                    </a>
                </div>
                {{-- TODO: If user is an admin --}}
                <div class="h-16 w-11/12 mx-auto shadow-lg rounded-lg bg-white grid grid-cols-4">
                    {{-- TODO: Redirect to home --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 ml-2 mr-1 rounded-md text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
                    {{-- TODO: Redirect to Revenue Page --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                    {{-- TODO: Redirect to View Requests Page --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                    </a>
                    {{-- TODO: Redirect to User Profile Page --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                        <div class="h-6 w-6 rounded-full overflow-hidden bg-gray-50">
                            {{-- TODO: If user from google, get profile image from the url --}}
                            <img src="" alt="Google Profile Image" class="h-full w-full object-cover">
                            {{-- TODO: If user is not from google, get profile image from storage --}}
                            <img src="" alt="Profile Image from Storage"
                                class="h-full w-full object-cover object-center">
                            {{-- END --}}
                        </div>
                    </a>
                </div>
                {{-- TODO: For logged in user except admin --}}
                <div class="h-16 w-11/12 mx-auto shadow-lg rounded-lg bg-white grid grid-cols-4">
                    {{-- TODO: Redirect to home --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 ml-2 mr-1 rounded-md text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
                    {{-- TODO: Redirect to Bid Ongoing Page --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                        <img src="/images/auction.svg" alt="Auction" class="h-6 w-6">
                    </a>
                    {{-- TODO: Redirect to Buy Transaction History Page --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </a>
                    {{-- TODO: Redirect to User Profile Page --}}
                    <a href=""
                        class="hover:bg-emerald-100 transition inline-grid place-items-center my-2 mr-2 ml-1 rounded-md text-gray-500">
                        <div class="h-6 w-6 rounded-full overflow-hidden bg-gray-50">
                            {{-- TODO: If user from google, get profile image from the url --}}
                            <img src="" alt="Google Profile Image" class="h-full w-full object-cover">
                            {{-- TODO: If user is not from google, get profile image from storage --}}
                            <img src="" alt="Profile Image from Storage"
                                class="h-full w-full object-cover object-center">
                            {{-- END --}}
                        </div>
                    </a>
                </div>
                {{-- END --}}
            </div>
        </nav>

        <div class="md:h-18"></div>
        <div class="min-h-full-without-nav">
            @yield('content')
        </div>

        <footer class="bg-emerald-200 pb-16 md:pb-0">
            <div class="max-w-screen-2xl mx-auto py-12 px-6 sm:px-8 md:flex md:items-center md:justify-between">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a href="https://www.facebook.com/lukas.tanto.3/"
                        class="text-gray-600 hover:text-gray-900 transition-all">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/lukast2410"
                        class="text-gray-600 hover:text-gray-900 transition-all">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="https://twitter.com/lukastanto24" class="text-gray-600 hover:text-gray-900 transition-all">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                    <a href="https://github.com/lukast2410" class="text-gray-600 hover:text-gray-900 transition-all">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="https://dribbble.com/lukas24" class="text-gray-600 hover:text-gray-900 transition-all">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-md text-gray-700 font-bold">
                        &copy; 2022 Lukas Tanto, Inc. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
