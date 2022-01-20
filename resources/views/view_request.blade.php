@extends('layouts.app')

@section('content')
    <main class="w-full max-w-screen-2xl lg:mx-auto px-6 sm:px-8 py-8">
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
            
        @endif
    </main>
@endsection
