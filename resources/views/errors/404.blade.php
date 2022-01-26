@extends('layouts.sign')

@section('content')
    <main class="w-screen h-screen flex items-center justify-center">
        <div class="mx-auto w-screen max-w-screen-lg px-6 sm:px-8 flex flex-col space-y-4 text-center items-center">
            <div class="w-full h-auto relative">
                <span
                    class="absolute top-0 right-0 font-bold text-emerald-500 text-4xl sm:text-7xl md:text-8xl m-2 lg:m-8">404</span>
                <img class="w-full h-auto" src="{{ asset('images/art.png') }}" alt="Art">
            </div>
            <h3 class="text-lg font-medium text-gray-600">Hey Buddy! Looks like you're heading to a wrong place!</h3>
            <a href="{{ route('home') }}"
                class="w-full max-w-xs select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-white bg-emerald-400 hover:bg-emerald-500">
                Back to Home
            </a>
        </div>
    </main>
@endsection
