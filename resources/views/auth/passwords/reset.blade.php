@extends('layouts.sign')

@section('content')
    <main class="w-full h-screen flex sm:py-16 items-center justify-center overflow-hidden">
        <div class="w-screen sm:w-11/12 lg:w-5/6 sm:mx-auto h-full flex justify-between items-center relative">
            <div
                class="hidden sm:flex flex-col justify-end lg:justify-center xl:justify-between w-full lg:w-3/5 h-full lg:mr-8">
                {{-- TODO: Redirect to home --}}
                <a href="" class="hidden lg:block">
                    <img class="h-10 w-fit" src="{{ asset('images/logo_long.png') }}" alt="Logo LegacyArT">
                </a>
                <h1
                    class="hidden lg:block text-4.5xl xl:text-4.75xl 2xl:text-5xl leading-tight 2xl:leading-snug font-bold pt-6 xl:pt-0 pb-8 xl:pb-6">
                    #1 Discover, Collect, and Sell
                    Extraordinary NFTs.</h1>
                <div class="block w-full h-auto 2xl:h-3/5">
                    <img class="h-auto w-full" src="{{ asset('images/art.png') }}" alt="Art">
                </div>
            </div>
            <div
                class="relative w-full h-full sm:absolute sm:left-1/2 sm:-translate-x-1/2 lg:left-0 lg:static lg:translate-x-0 bg-white sm:rounded-3xl sm:w-96 lg:w-3/10 sm:min-w-96 overflow-x-hidden overflow-y-auto sm:h-min max-h-full small-scroll shadow-lg">
                <div class="bg-emerald-400 h-4 w-full"></div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#34d399" fill-opacity="1"
                        d="M0,0L48,10.7C96,21,192,43,288,53.3C384,64,480,64,576,96C672,128,768,192,864,197.3C960,203,1056,149,1152,154.7C1248,160,1344,224,1392,256L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                    </path>
                </svg>
                {{-- TODO: Redirect to home --}}
                <a href="" class="lg:hidden">
                    <img class="relative -translate-y-3/4 ml-6 sm:ml-8 h-7 w-fit"
                        src="{{ asset('images/logo_long.png') }}" alt="Logo LegacyArT">
                </a>
                <div class="ml-6 sm:ml-8 bg-emerald-100 absolute -translate-y-1/3 lg:-translate-y-3/4 rounded-full flex">
                    <div
                        class="py-3 px-6 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full text-white font-medium">
                        Reset Password
                    </div>
                </div>
                <div class="flex justify-center align-items w-full h-auto mt-14 sm:hidden">
                    <img class="h-full w-11/12" src="{{ asset('images/art.png') }}" alt="Art">
                </div>
                <form class="w-full mt-8 sm:mt-10 px-6 pb-6 space-y-4 sm:px-8" method="POST"
                    action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Email') }}:
                        </label>

                        <input id="email" type="email"
                            class="@error('email') border-red-500 @enderror appearance-none border-2 border-gray-200 rounded-md w-full shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        {{-- TODO: If Email is invalid, Provide Error Message --}}
                        <p class="text-red-500 text-xs italic mt-0.5">
                            Error message
                        </p>
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="@error('password') border-red-500 @enderror appearance-none border-2 border-gray-200 rounded-md w-full shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2"
                            name="password" required>

                        {{-- TODO: If Password is invalid, Provide Error Message --}}
                        <p class="text-red-500 text-xs italic mt-0.5">
                            Error message
                        </p>
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password"
                            class="form-input w-full appearance-none border-2 border-gray-200 rounded-md w-full shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap pt-4">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-white bg-emerald-400 hover:bg-emerald-500">
                            {{ __('Reset') }}
                        </button>
                    </div>
            </div>
        </div>
    </main>
@endsection
