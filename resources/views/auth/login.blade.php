@extends('layouts.sign')

@section('content')
    <main class="w-screen h-screen flex py-16 items-center justify-center">
        <div class="sm:w-5/6 sm:mx-auto h-full flex justify-between items-center">
            <div class="flex flex-col justify-between w-3/5 h-full">
                <a href="{{ route('home') }}" class="block">
                    <img class="h-10 w-fit" src="{{ asset('images/logo_long.png') }}" alt="Logo LegacyArT">
                </a>
                <h1 class="text-4.5xl 2xl:text-6xl leading-tight font-medium pb-4">#1 Discover, Collect, and Sell
                    Extraordinary NFTs.</h1>
                <div class="block w-full h-3/5">
                    <img class="h-full" src="{{ asset('images/art.png') }}" alt="Art">
                </div>
            </div>
            <div class="relative bg-white rounded-3xl w-3/10 min-w-104 overflow-x-hidden overflow-y-auto h-min max-h-full relative small-scroll">
                <div class="bg-emerald-400 h-4 w-full"></div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#34d399" fill-opacity="1"
                        d="M0,0L48,10.7C96,21,192,43,288,53.3C384,64,480,64,576,96C672,128,768,192,864,197.3C960,203,1056,149,1152,154.7C1248,160,1344,224,1392,256L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                    </path>
                </svg>
                <div class="ml-8 bg-emerald-100 absolute -translate-y-3/4 rounded-full flex">
                    <div class="py-3 px-6 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full text-white">Login
                    </div>
                    @if (Route::has('register'))
                        <a class="py-3 pr-5 pl-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </div>
                <form class="w-full mt-10 px-6 space-y-4 sm:px-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Email') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror  focus:shadow-none focus:border-emerald-400 focus:ring-emerald-400"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror focus:shadow-none focus:border-emerald-400 focus:ring-emerald-400"
                            name="password" required>

                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember"
                                class="form-checkbox rounded focus:shadow-none focus:border-emerald-400 focus:ring-emerald-400 text-emerald-400 p-2"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-green-400 hover:text-emerald-600 whitespace-no-wrap no-underline hover:underline ml-auto"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-white bg-emerald-400 hover:bg-emerald-500">
                            {{ __('Let\'s Go!') }}
                        </button>
                    </div>

                    <div class="flex flex-wrap">
                        @if (Route::has('google.login'))
                            <a href="{{ route('google.login') }}"
                                class="flex items-center justify-center w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-slate-400 bg-white border-2 border-slate-100 hover:bg-slate-100">
                                <x-grommet-google class="h-5 w-5 mr-2" />
                                {{ __('Continue with Google') }}
                            </a>
                        @endif
                    </div>
                </form>
                <footer class="bg-gray-100 p-3 text-center text-xs font-medium text-gray-500 mt-8">
                    By clicking the button above, you agree to our <span class="text-green-400">terms</span> and <span class="text-green-400">conditions</span>
                </footer>
            </div>
        </div>
    </main>
@endsection
