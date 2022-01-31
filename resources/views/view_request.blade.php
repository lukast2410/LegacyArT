@extends('layouts.app')

@section('content')
    <main class="w-full max-w-screen-2xl lg:mx-auto px-6 sm:px-8 py-6">
        {{-- TODO: If the request data is empty --}}
        <div class="w-full max-w-screen-2xl mx-auto">
            <div class="w-full bg-emerald-200 text-center rounded-lg px-4 py-10 mb-4">
                <h1 class="text-emerald-700 text-base sm:text-2xl font-bold">
                    There are no request yet
                </h1>
                {{-- TODO: Redirect user to the Request Creator Page --}}
                <a href="" class="text-emerald-600 text-sm sm:text-base font-medium hover:text-emerald-700">
                    Let's request to be a creator
                </a>
            </div>
        </div>
        {{-- TODO: If the request data is not empty --}}
        <h1 class="w-full max-w-screen-lg mx-auto text-2xl sm:text-4xl text-emerald-600 font-medium leading-tight">
            {{-- TODO: If the user is an admin --}}
            All Requests
            {{-- TODO: Else --}}
            My Requests
            {{-- END --}}
        </h1>
        <div class="mt-4 w-full max-w-screen-lg mx-auto bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">
                {{-- TODO: Show list of the request --}}
                <li class="block hover:bg-gray-50">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-emerald-500 truncate">
                                Request User Nickname
                            </p>
                            <div class="ml-2 flex-shrink-0 flex">
                                {{-- TODO: If status accepted --}}
                                <p
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 capitalize">
                                    status
                                </p>
                                {{-- TODO: If status is rejected --}}
                                <p
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 capitalize">
                                    status
                                </p>
                                {{-- TODO: Else --}}
                                <p
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 capitalize">
                                    status
                                </p>
                                {{-- END --}}
                            </div>
                        </div>
                        <div class="mt-1 sm:flex sm:justify-between items-end">
                            <div class="block">
                                <div class="text-sm text-gray-500">
                                    <h4 class="font-semibold">Bio:</h4>
                                    <p>Request Bio</p>
                                </div>
                                <div class="text-sm text-gray-500 mt-1">
                                    <h4 class="font-semibold">Reason:</h4>
                                    <p>Request Reason</p>
                                </div>
                            </div>
                            <div class="whitespace-nowrap flex flex-row sm:flex-col justify-between">
                                <div class="mt-2 flex justify-end items-center text-sm text-gray-500 sm:mt-0">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <p>
                                        January 12, 2022
                                    </p>
                                </div>
                                {{-- TODO: If the user is an admin and the request status is still pending --}}
                                <div class="mt-2 flex justify-end items-center text-sm text-gray-500 sm:mt-1">
                                    {{-- TODO: Provide Reject Request Action --}}
                                    <form action="" method="">
                                        @csrf

                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-1.5 mr-1 border border-transparent text-xs font-semibold rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none">
                                            Reject
                                        </button>
                                    </form>
                                    {{-- TODO: Provide Accept Request Action --}}
                                    <form action="" method="">
                                        @csrf

                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-1.5 border border-transparent text-xs font-semibold rounded shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none">
                                            Accept
                                        </button>
                                    </form>
                                </div>
                                {{-- END --}}
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
