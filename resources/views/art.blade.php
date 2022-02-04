@extends('layouts.app')

@section('content')
    <header class="w-full min-h-full-without-nav bg-emerald-100 flex items-center justify-center">
        {{-- TODO: Show Art Image --}}
        <img class="w-auto h-auto max-h-screen-75 drop-shadow-xl" src="" alt="Art Image">
    </header>
    <main class="w-full max-w-screen-2xl sm:mx-auto px-6 sm:px-10 lg:px-16">
        <div class="grid lg:grid-cols-2 gap-8 mt-8 mb-16 items-end">
            <div>
                <h1 class="text-5xl font-bold">Art Name</h1>
                <h3 class="text-lg font-semibold text-emerald-600 mt-3">Minted on
                    Jan 21, 2022</h3>
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-emerald-600">
                        Created by
                    </h3>
                    {{-- TODO: Redirect to Creator Profile Page --}}
                    <a href=""
                        class="mt-1 w-fit block flex items-center p-2 bg-emerald-100 rounded-full shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
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
            </div>
            <div class="lg:border-l-2 border-gray-300 lg:px-10">
                {{-- TODO: If the art has been sold --}}
                <h3 class="text-lg font-semibold text-emerald-600">
                    Owned by
                </h3>
                {{-- TODO: Redirect to the Owner Profile Page --}}
                <a href=""
                    class="mt-1 w-fit block flex items-center p-2 bg-emerald-100 rounded-full shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
                    <div class="h-8 w-8 rounded-full overflow-hidden bg-gray-50">
                        {{-- TODO: If user from google, get profile image from the url --}}
                        <img src="" alt="Owner Profile from Google" class="h-full w-full object-cover">
                        {{-- TODO: If user is not from google, get profile image from storage --}}
                        <img src="" alt="Owner Profile from Storage" class="h-full w-full object-cover object-center">
                        {{-- END --}}
                    </div>
                    <span class="text-emerald-800 font-bold px-3"></span>
                </a>
                {{-- TODO: If there is no bid yet --}}
                <h3 class="text-lg font-semibold text-emerald-600">
                    Start Bid
                </h3>
                <h2 class="text-2xl sm:text-4xl font-semibold text-emerald-800 leading whitespace-nowrap">
                    Start Bid ETH
                </h2>
                {{-- TODO: If there is at least one bid --}}
                <h3 class="text-lg font-semibold text-emerald-600">
                    Current Bid
                </h3>
                <h2 class="mt-1 text-2xl sm:text-4.5xl font-medium text-emerald-800 leading whitespace-nowrap">
                    Highest Bid ETH
                </h2>
                {{-- TODO: Redirect to the Highest Bidder Profile Page --}}
                <a href=""
                    class="mt-4 w-fit block flex items-center transition-all text-emerald-600 hover:text-emerald-800">
                    <div class="h-5 w-5 rounded-full overflow-hidden bg-gray-50">
                        {{-- TODO: If user from google, get profile image from the url --}}
                        <img src="" alt="Highest Bidder Profile from Google" class="h-full w-full object-cover">
                        {{-- TODO: If user is not from google, get profile image from storage --}}
                        <img src="" alt="Highest Bidder Profile from Storage" class="h-full w-full object-cover object-center">
                        {{-- END --}}
                    </div>
                    <span class="font-semibold px-2">Highest Bidder Nickname</span>
                </a>
                {{-- END --}}
                {{-- TODO: If the user is not an admin and not the owner of this art --}}
                <button id="bid-button" type="button"
                    class="mt-4 inline-flex justify-center items-center w-full lg:max-w-lg px-6 py-3 border border-transparent text-lg font-medium rounded-lg shadow-sm text-white transition-all bg-emerald-800 hover:shadow-lg hover:-translate-y-0.5 focus:outline-none">
                    Place a bid
                </button>
                {{-- TODO: If the user is the owner of this art and this art has at least one bid, provide Accept Offer Action --}}
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ 'the art id' }}">

                    <button type="submit"
                        class="mt-4 inline-flex justify-center items-center w-full lg:max-w-lg px-6 py-3 border border-transparent text-lg font-medium rounded-lg shadow-sm text-white transition-all bg-emerald-800 hover:shadow-lg hover:-translate-y-0.5 focus:outline-none">
                        Accept latest offer
                    </button>
                </form>
                {{-- END --}}
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-x-16 gap-y-12 xl:gap-24 mb-16">
            <div>
                <div class="pb-5 border-b border-gray-300 mb-4">
                    <h3 class="text-2xl leading-4 font-semibold text-gray-900">
                        Descriptions
                    </h3>
                </div>
                <p class="font-semibold text-lg max-w-screen-md lg:max-w-xl">Art Description</p>
            </div>
            <div>
                {{-- TODO: If the art has at least one bid --}}
                <div class="pb-5 border-b border-gray-300 mb-4">
                    <h3 class="text-2xl leading-4 font-semibold text-gray-900">
                        Latest bids
                    </h3>
                </div>
                    {{-- TODO: If the art has been sold, show the winner --}}
                    <div class="shadow-md rounded-lg p-4 flex items-start sm:items-center mb-3 relative">
                        <div class="h-8 w-8 rounded-full overflow-hidden bg-gray-50">
                            {{-- TODO: If user from google, get profile image from the url --}}
                            <img src="" alt="Winner Profile from Google" class="h-full w-full object-cover">
                            {{-- TODO: If user is not from google, get profile image from storage --}}
                            <img src="" alt="Winner Profile from Storage" class="h-full w-full object-cover object-center">
                            {{-- END --}}
                        </div>
                        <div class="flex-1 flex items-center justify-between ml-4 mr-10 sm:mr-0">
                            <div>
                                <h4 class="block sm:hidden text-lg font-semibold text-emerald-900 leading-4 mb-1">
                                    Bid Amount ETH
                                </h4>
                                <h4 class="font-semibold">
                                    Auction won by
                                    {{-- TODO: Redirect to the Winner Profile Page --}}
                                    <a href=""
                                        class="mt-1 text-emerald-600 hover:text-emerald-800">
                                        <span class="font-semibold">Winner Nickname</span>
                                    </a>
                                </h4>
                            </div>
                            <div class="hidden sm:flex flex-col justify-center items-end">
                                <h4 class="text-lg font-semibold text-emerald-900 whitespace-nowrap">
                                    Bid Amount ETH
                                </h4>
                            </div>
                        </div>
                    </div>
                    {{-- END --}}
                
                {{-- TODO: Show List of the latest bid --}}
                    <div class="shadow-md rounded-lg p-4 flex items-start sm:items-center mb-3 relative">
                        <div class="h-8 w-8 rounded-full overflow-hidden bg-gray-50">
                            {{-- TODO: If user from google, get profile image from the url --}}
                            <img src="" alt="Bidder Profile from Google" class="h-full w-full object-cover">
                            {{-- TODO: If user is not from google, get profile image from storage --}}
                            <img src="" alt="Bidder Profile from Storage" class="h-full w-full object-cover object-center">
                            {{-- END --}}
                        </div>
                        <div class="flex-1 flex items-center justify-between ml-4 mr-10 sm:mr-0">
                            <div>
                                <h4 class="block sm:hidden text-lg font-semibold text-emerald-900 leading-4 mb-1">
                                    Bid Amount ETH
                                </h4>
                                <h4 class="font-semibold">
                                    Bid placed by
                                    {{-- TODO: Redirect to the Bidder Profile Page --}}
                                    <a href=""
                                        class="mt-1 text-emerald-600 hover:text-emerald-800">
                                        <span class="font-semibold">Bidder Nickname</span>
                                    </a>
                                </h4>
                                <p class="mt-1 font-medium text-gray-500">
                                    Jan 21, 2022 at 02:45 PM
                                </p>
                            </div>
                            <div class="hidden sm:flex flex-col justify-center items-end">
                                {{-- TODO: If the user is the owner of this bid and the bid status is still ongoing, provide Cancel Bid Action --}}
                                    <form action="" method="POST">
                                        @csrf

                                        <button type="submit"
                                            class="py-0.5 px-2 bg-red-700 rounded text-xs font-semibold text-white">Cancel</button>
                                    </form>
                                {{-- END --}}
                                <h4 class="text-lg font-semibold text-emerald-900 whitespace-nowrap">
                                    Bid Amount ETH
                                </h4>
                            </div>
                        </div>
                        <div class="block sm:hidden absolute top-0 right-0 p-4">
                            {{-- TODO: If the user is the owner of this bid and the bid status is still ongoing, provide Cancel Bid Action --}}
                                <form action="" method="POST">
                                    @csrf

                                    <button type="submit" class="p-2 bg-red-700 rounded text-xs font-semibold text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            {{-- END --}}
                        </div>
                    </div>
                {{-- END LIST --}}
                {{-- END --}}
            </div>
        </div>
    </main>

    {{-- Modal for Place a bid form --}}
    <div id="bid-modal"
        class="hidden fixed top-0 left-0 h-screen w-screen bg-black-trans-60 z-50 flex justify-center items-end sm:items-center pb-12">
        <div class="bg-white rounded-lg shadow p-6 mx-4 w-screen max-w-sm relative">
            {{-- TODO: Provide Submit Bid Action --}}
            <form class="flex flex-col space-y-4" action="" method="POST">
                @csrf
                <input type="hidden" name="artId" id="artId" value="{{ 'the art id' }}">

                <div class="flex flex-wrap flex-col">
                    <label for="bid" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Bid') }}:
                    </label>

                    <div class="flex rounded-md shadow-sm">
                        <span
                            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-emerald-600 font-medium sm:text-sm">
                            ETH
                        </span>
                        {{-- TODO: Validate the minimum bid, and the bid amount must be 2 digits maximum after comma --}}
                        <input id="bid" type="number"
                            class="form-input flex-1 min-w-0 block w-full @error('bid') border-red-500 @enderror appearance-none border-2 border-gray-200 shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2 rounded-none rounded-r-md"
                            name="bid" required autocomplete="bid" placeholder="5.00"
                            min="" autofocus>
                    </div>

                    <div class="text-sm mt-2 font-medium text-emerald-600">
                        {{-- TODO: If there is at least one bid, show the highest bid --}}
                            <span>Latest bid: Highest Bid ETH</span>
                        {{-- TODO: If there is no bid yet --}}
                            <span>Start bid: Start Bid ETH</span>
                        {{-- END --}}
                    </div>

                    <div class="text-sm mt-1 font-medium text-emerald-600">Fee: 0.5%</div>
                </div>

                <div class="flex items-center">
                    <label class="inline-flex items-center text-sm text-gray-700" for="agree">
                        <input type="checkbox" name="agree" id="agree"
                            class="accent-emerald-500 rounded focus:shadow-none focus:border-emerald-400 focus:ring-emerald-400 text-emerald-400"
                            {{ old('agree') ? 'checked' : '' }} required>
                        <span class="ml-2">{{ __('Agree to terms and conditions') }}</span>
                    </label>
                </div>

                <div class="flex flex-wrap">
                    <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-white bg-emerald-400 hover:bg-emerald-500">
                        {{ __('Place the bid') }}
                    </button>
                </div>
            </form>
            <div class="block absolute top-0 right-0 pt-4 pr-4">
                <button id="close-button" type="button"
                    class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/art.js') }}"></script>
@endsection
