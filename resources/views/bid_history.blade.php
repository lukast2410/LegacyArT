@extends('layouts.app')

@section('content')
    <main class="w-full max-w-screen-lg lg:mx-auto px-6 lg:px-0 py-6">
        <nav
            class="mb-6 w-full max-w-screen-2xl mx-auto flex sm:space-x-2  items-start sm:items-center flex-col-reverse sm:flex-row">
            <div class="flex space-x-2 flex-1 w-full sm:w-min">
                {{-- TODO: Redirect to Bid Ongoing Page --}}
                <a href=""
                    class="flex flex-1 sm:flex-none items-center justify-center space-x-2 px-4 py-3 cursor-pointer border-b-4 border-gray-200 hover:border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    <span class="font-semibold text-lg">Ongoing</span>
                    {{-- Show Total Ongoing Bid --}}
                    <span
                        class="bg-emerald-100 text-emerald-700 py-0.5 px-2 rounded-full text-xs font-medium inline-block">5</span>
                </a>
                <div
                    class="flex flex-1 sm:flex-none items-center justify-center space-x-2 px-4 py-3 cursor-pointer border-b-4 border-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-semibold text-lg">History</span>
                    {{-- Show Total Bid History --}}
                    <span
                        class="bg-emerald-100 text-emerald-700 py-0.5 px-2 rounded-full text-xs font-medium inline-block">10</span>
                </div>
            </div>
        </nav>
        {{-- TODO: If there is no bid history yet --}}
            <div class="w-full max-w-screen-2xl mx-auto">
                <div class="w-full bg-emerald-200 text-center rounded-lg px-4 py-10 mb-4">
                    <h1 class="text-emerald-700 text-base sm:text-2xl font-bold">
                        There are no bid yet
                    </h1>
                    {{-- TODO: Redirect to home --}}
                    <a href=""
                        class="text-emerald-600 text-sm sm:text-base font-medium hover:text-emerald-700">
                        Let's buy some NFTs.
                    </a>
                </div>
            </div>
        {{-- TODO: If there is at least one bid history --}}
            <div class="w-full max-w-screen-lg mx-auto">
                <h1 class="text-2xl sm:text-4xl text-emerald-600 font-medium leading-tight">
                    Bid History
                </h1>
            </div>
            <div class="mt-4 w-full max-w-screen-lg mx-auto bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    {{-- TODO: Show list of bid history --}}
                        <li class="block hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-semibold text-emerald-600 truncate">
                                        Bidder Nickname
                                    </p>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        {{-- TODO: If status accepted --}}
                                        <p
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 capitalize">
                                            status
                                        </p>
                                        {{-- TODO: Else --}}
                                        <p
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 capitalize">
                                            status
                                        </p>
                                        {{-- END --}}
                                    </div>
                                </div>
                                <p class="mt-2 flex items-center text-sm text-gray-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Art Name
                                </p>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Bid Amount ETH
                                        </p>
                                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                                            </svg>
                                            Fee ETH
                                        </p>
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p>
                                            January 21, 2022
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    {{-- END LIST --}}
                </ul>
            </div>
            <div class="w-full max-w-screen-lg mx-auto mt-4">
                Paginate
            </div>
        {{-- END --}}
    </main>
@endsection
