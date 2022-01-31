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
                    <a class="py-3 pl-5 pr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <div
                        class="py-3 px-6 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full text-white font-medium">
                        Register
                    </div>
                </div>
                {{-- ! Register Action --}}
                <form class="w-full mt-14 sm:mt-12 lg:mt-10 px-6 space-y-4 sm:px-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div
                        class="flex flex-wrap items-center justify-center @error('profile_image') border-red-500 @enderror">
                        <label for="profile_image">
                            <span
                                class="relative inline-block h-24 w-24 rounded-xl overflow-hidden bg-emerald-100 overflow-hidden cursor-pointer">
                                <svg class="h-full w-full text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <div class="absolute top-0 left-0 w-full h-full z-10 overflow-hidden">
                                    <img id="profile_preview" src="" alt="" class="h-full object-cover">
                                </div>
                                <div
                                    class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-black-trans opacity-0 hover:opacity-100 z-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </span>
                        </label>
                    </div>
                    <input id="profile_image" type="file" class="hidden" name="profile_image" value="Profile">
                    {{-- TODO: If Profile Image is invalid, Provide Error Message --}}
                    <p class="text-red-500 text-xs italic mt-0.5">
                        Error message
                    </p>

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Full Name') }}:
                        </label>

                        <input id="name" type="text"
                            class="@error('name') border-red-500 @enderror appearance-none border-2 border-gray-200 rounded-md w-full shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        {{-- TODO: If Full Name is invalid, Provide Error Message --}}
                        <p class="text-red-500 text-xs italic mt-0.5">
                            Error message
                        </p>
                    </div>

                    <div class="flex flex-col flex-wrap">
                        <label for="nickname" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Nickname') }}:
                        </label>

                        <div class="flex rounded-md shadow-sm">
                            <span
                                class="inline-flex items-center px-4 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                @
                            </span>
                            <input id="nickname" type="text"
                                class="form-input flex-1 min-w-0 block w-full @error('nickname') border-red-500 @enderror appearance-none border-2 border-gray-200 shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2 rounded-none rounded-r-md"
                                name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname">
                        </div>

                        {{-- TODO: If Nickname is invalid, Provide Error Message --}}
                        <p class="text-red-500 text-xs italic mt-0.5">
                            Error message
                        </p>
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Email') }}:
                        </label>

                        <input id="email" type="email"
                            class="@error('email') border-red-500 @enderror appearance-none border-2 border-gray-200 rounded-md w-full shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            class="appearance-none border-2 border-gray-200 rounded-md w-full shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2"
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
                        {{-- TODO: Provide Google Authentication --}}
                        <a href=""
                            class="flex items-center justify-center w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-slate-400 bg-white border-2 border-gray-200 hover:bg-gray-200">
                            <img src="/images/google.png" alt="Google" class="h-5 w-5 mr-2">
                            {{ __('Continue with Google') }}
                        </a>
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
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#profile_image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#profile_preview').attr('src', e.target.result);
                    $('#profile_preview').addClass('w-full')
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
