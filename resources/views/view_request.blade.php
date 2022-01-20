@extends('layouts.app')

@section('content')
    <main class="w-full max-w-screen-2xl lg:mx-auto px-6 sm:px-8 py-6">
        @if ($requests->count() == 0)
            <div class="w-full max-w-screen-2xl mx-auto">
                <div class="w-full bg-emerald-200 text-center rounded-lg px-4 py-10 mb-4">
                    <h1 class="text-emerald-700 text-base sm:text-2xl font-bold">
                        There are no request yet
                    </h1>
                    <a href="{{ route('request.creator') }}"
                        class="text-emerald-600 text-sm sm:text-base font-medium hover:text-emerald-700">
                        Let's request to be a creator
                    </a>
                </div>
            </div>
        @else
            <h1 class="w-full max-w-screen-lg mx-auto text-4xl text-emerald-600 font-medium leading-tight">
                @can('admin')
                    All Requests
                @else
                    My Requests
                @endcan
            </h1>
            <div class="mt-4 w-full max-w-screen-lg mx-auto bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    @foreach ($requests as $req)
                        <li class="block hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-emerald-500 truncate">
                                        {{ '@' . $req->user->nickname }}
                                    </p>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full @if ($req->status == 'Accepted')
                                            bg-green-100 text-green-800
                                            @elseif ($req->status == 'Rejected')
                                            bg-red-100 text-red-800
                                            @else
                                            bg-yellow-100 text-yellow-800
                                            @endif">
                                            {{ $req->status }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-1 sm:flex sm:justify-between items-end">
                                    <div class="block">
                                        <div class="text-sm text-gray-500">
                                            <h4 class="font-semibold">Bio:</h4>
                                            <p>{{ $req->bio }}</p>
                                        </div>
                                        <div class="text-sm text-gray-500 mt-1">
                                            <h4 class="font-semibold">Reason:</h4>
                                            <p>{{ $req->reason }}</p>
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
                                                {{ date_format($req->created_at, 'F d, Y') }}
                                            </p>
                                        </div>
                                        @can('modify-request', $req)
                                        <div class="mt-2 flex justify-end items-center text-sm text-gray-500 sm:mt-1">
                                            <form action="{{ route('reject.request', $req->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf

                                                <button type="submit"
                                                    class="inline-flex items-center px-4 py-1.5 mr-1 border border-transparent text-xs font-semibold rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none">
                                                    Reject
                                                </button>
                                            </form>
                                            <form action="{{ route('accept.request', $req->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf

                                                <button type="submit"
                                                    class="inline-flex items-center px-4 py-1.5 border border-transparent text-xs font-semibold rounded shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none">
                                                    Accept
                                                </button>
                                            </form>
                                        </div>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full max-w-screen-lg mx-auto mt-4">
                {{ $requests->links() }}
            </div>
        @endif
    </main>
@endsection
