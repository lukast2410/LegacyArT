@extends('layouts.app')

@section('content')
    <header
        class="w-full min-h-full-without-nav py-6 sm:py-12 lg:py-0 bg-gradient-to-b from-emerald-50 to-emerald-200 flex items-center px-6 sm:px-0">
        <div
            class="w-full max-w-screen-2xl mx-auto h-5/6 grid grid-cols-1 lg:grid-cols-2fr gap-y-4 sm:gap-y-12 gap-x-8 lg:gap-x-16 sm:px-10">
            <div class="h-full flex items-center justify-center">
                {{-- Show Art Image --}}
                <img class="w-full h-full max-h-full lg:max-h-screen-60 object-contain object-center drop-shadow-xl" src=""
                    alt="Art Image">
            </div>
            <div class="relative flex flex-col justify-center items-start space-y-4 sm:space-y-6">
                <h1 class="text-4.5xl sm:text-6xl font-bold text-emerald-800 leading-tight">
                    Art Name
                </h1>
                <div class="space-y-1">
                    <h3 class="text-lg font-semibold text-emerald-600">
                        Created by
                    </h3>
                    {{-- TODO: Redirect to Creator Profile Page --}}
                    <a href=""
                        class="block flex items-center p-2 bg-emerald-100 rounded-full shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
                        <div class="h-8 w-8 rounded-full overflow-hidden bg-gray-50">
                            {{-- TODO: If user from google, get profile image from the url --}}
                            <img src="" alt="Creator Profile from Google" class="h-full w-full object-cover">
                            {{-- TODO: If user is not from google, get profile image from storage --}}
                            <img src="" alt="Creator Profile from Storage" class="h-full w-full object-cover object-center">
                            {{-- END --}}
                        </div>
                        <span class="text-emerald-800 font-bold px-3">Creator Nickname</span>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0">
                    <div class="space-y-1 sm:pr-4 sm:mr-4 sm:border-r-2 border-green-300">
                        {{-- TODO: If the art has at least one bid --}}
                        <h3 class="text-lg font-semibold text-emerald-600">
                            Current bid
                        </h3>
                        <h2 class="text-2xl sm:text-4xl font-semibold text-emerald-800 leading whitespace-nowrap">
                            Highest Bid ETH</h2>
                        {{-- TODO: If the art has no bid yet --}}
                        <h3 class="text-lg font-semibold text-emerald-600">
                            Start bid
                        </h3>
                        <h2 class="text-2xl sm:text-4xl font-semibold text-emerald-800 leading whitespace-nowrap">
                            Start Bid ETH</h2>
                        {{-- END --}}
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-semibold text-emerald-600">
                            Created at
                        </h3>
                        <h2 class="text-2xl sm:text-4xl font-semibold text-emerald-800 leading whitespace-nowrap">
                            Jan 15, 2022</h2>
                    </div>
                </div>
                {{-- TODO: Redirect to Art Detail Page --}}
                <a href=""
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
                {{-- TODO: Show list of creators, redirect to Creator Profile Page when clicked --}}
                    <a href=""
                        class="block relative bg-white rounded-lg overflow-hidden shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
                        {{-- TODO: If user from google, get profile image from the url --}}
                        <img src="" alt="Creator Profile from Google" class="h-full w-full object-cover object-center">
                        {{-- TODO: If user is not from google, get profile image from storage --}}
                        <img src="" alt="Creator Profile from Storage" class="h-full w-full object-cover object-center">
                        {{-- END --}}
                        <div
                            class="absolute left-0 top-0 w-full h-full bg-black-trans flex items-end text-gray-50 font-semibold">
                            <span class="m-3 py-2 px-3 bg-black rounded-lg">
                                Creator Nickname
                            </span>
                        </div>
                    </a>
                {{-- END LIST --}}
            </div>
        </div>
        <div class="w-full px-6 sm:px-10">
            <h1 class="w-full text-4xl sm:text-4.5xl font-bold text-emerald-800 leading-tight text-center">
                Featured Artworks
            </h1>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8 my-12">
                {{-- TODO: Show list of art, and pass the art data to the component --}}
                    <x-art-card />
                {{-- END LIST --}}
            </div>
        </div>
    </main>
@endsection
