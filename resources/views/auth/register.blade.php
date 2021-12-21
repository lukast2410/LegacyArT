@extends('layouts.sign')

@section('content')
    {{-- <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main> --}}
    <main class="w-screen h-screen flex sm:py-16 items-center justify-center">
        <div class="w-screen sm:w-11/12 lg:w-5/6 sm:mx-auto h-full flex justify-between items-center relative">
            <div
                class="hidden sm:flex flex-col justify-end lg:justify-center xl:justify-between w-full lg:w-3/5 h-full lg:mr-8">
                <a href="{{ route('home') }}" class="hidden lg:block">
                    <img class="h-10 w-fit" src="{{ asset('images/logo_long.png') }}" alt="Logo LegacyArT">
                </a>
                <h1
                    class="hidden lg:block text-4.5xl xl:text-4.75xl 2xl:text-5xl leading-tight 2xl:leading-snug font-bold pt-6 xl:pt-0 pb-8 xl:pb-6">
                    #1 Discover, Collect, and Sell
                    Extraordinary NFTs.</h1>
                <div class="block w-full h-auto 2xl:h-3/5">
                    <img class="h-full w-full" src="{{ asset('images/art.png') }}" alt="Art">
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
                <a href="{{ route('home') }}" class="lg:hidden">
                    <img class="relative -translate-y-3/4 ml-6 sm:ml-8 h-7 w-fit"
                        src="{{ asset('images/logo_long.png') }}" alt="Logo LegacyArT">
                </a>
                <div class="ml-6 sm:ml-8 bg-emerald-100 absolute -translate-y-1/3 lg:-translate-y-3/4 rounded-full flex">
                    @if (Route::has('login'))
                        <a class="py-3 pl-5 pr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    <div
                        class="py-3 px-6 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full text-white font-medium">
                        Register
                    </div>
                </div>
                <div class="flex justify-center align-items w-full h-auto mt-14 sm:hidden">
                    <img class="h-full w-11/12" src="{{ asset('images/art.png') }}" alt="Art">
                </div>
                <form class="w-full mt-8 sm:mt-12 lg:mt-10 px-6 space-y-4 sm:px-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text"
                            class="form-input w-full @error('name') border-red-500 @enderror  focus:shadow-none focus:border-emerald-400 focus:ring-emerald-400"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="text-red-500 text-xs italic mt-0.5">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Email') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror  focus:shadow-none focus:border-emerald-400 focus:ring-emerald-400"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="text-red-500 text-xs italic mt-0.5">
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
                            <p class="text-red-500 text-xs italic mt-0.5">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password"
                            class="form-input w-full focus:shadow-none focus:border-emerald-400 focus:ring-emerald-400"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-white bg-emerald-400 hover:bg-emerald-500 mt-2">
                            {{ __('Start!') }}
                        </button>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="px-2 bg-white text-xs font-medium text-gray-400">
                                OR
                            </span>
                        </div>
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
                    By clicking the button above, you agree to our
                    <span class="text-green-400">terms</span> and
                    <span class="text-green-400">conditions</span>
                </footer>
            </div>
        </div>
    </main>
@endsection
