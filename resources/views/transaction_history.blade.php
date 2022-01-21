@extends('layouts.app')

@section('content')
    <main class="w-full max-w-screen-2xl lg:mx-auto px-6 sm:px-8 py-6">
        @if ($transactions->count() == 0)
            <div class="w-full max-w-screen-2xl mx-auto">
                <div class="w-full bg-emerald-200 text-center rounded-lg px-4 py-10 mb-4">
                    <h1 class="text-emerald-700 text-base sm:text-2xl font-bold">
                        There are no transaction yet
                    </h1>
                    <a href="{{ route('home') }}"
                        class="text-emerald-600 text-sm sm:text-base font-medium hover:text-emerald-700">
                        Let's buy some NFTs.
                    </a>
                </div>
            </div>
        @else
            <div class="w-full max-w-screen-lg mx-auto">
                <h1 class="text-2xl sm:text-4xl text-emerald-600 font-medium leading-tight">
                    Transaction History
                </h1>
            </div>
            <div class="mt-4 w-full max-w-screen-lg mx-auto bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    @foreach ($transactions as $trans)
                        <li class="block hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-semibold text-emerald-600 truncate">
                                        {{ '@' . $trans->user->nickname }}
                                    </p>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 capitalize">
                                            {{ $trans->status }}
                                        </p>
                                    </div>
                                </div>
                                <p class="mt-2 flex items-center text-sm text-gray-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ $trans->art->name }}
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
                                            {{ $trans->amount . ' ETH' }}
                                        </p>
                                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                                            </svg>
                                            {{ $trans->fee . ' ETH' }}
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
                                            {{ date_format($trans->created_at, 'F d, Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full max-w-screen-lg mx-auto mt-4">
                {{ $transactions->links() }}
            </div>
        @endif
    </main>
@endsection
