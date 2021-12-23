@extends('layouts.sign')

@section('content')
    <main class="w-full sm:w-11/12 mx-auto max-w-screen-lg flex items-center h-screen">
        <div
            class="bg-gradient-to-br from-emerald-50 to-emerald-100 w-full px-8 sm:px-10 py-10 sm:bg-gray-50 sm:bg-none rounded-2xl text-center shadow-lg h-full sm:h-fit">
            <h1 class="text-3xl sm:text-4xl font-medium text-gray-700">Verify your email</h1>
            <h3 class="text-gray-500 mt-3 font-medium">You will need to verify your email to continue</h3>
            <img src="{{ asset('images/email-sent.png') }}" alt="Email Sent" class="h-full max-h-60 my-10 mx-auto">
            <p class="text-xs sm:text-sm text-gray-400 font-medium max-w-2xl mx-auto">An email has been sent to
                {{ Auth::user()->email }} with a link to verify your account. If you have not received the email after a
                few minutes, please check your spam folder.</p>
            <div
                class="mx-auto w-full max-w-sm flex justify-between items-center flex-col sm:flex-row space-y-4 sm:space-y-0 mt-6 sm:mt-8">
                <button type="button"
                    class="flex items-center justify-center w-full sm:w-40 py-3 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-500 hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500"
                    onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">
                    Resend Email
                </button>
                <a href="{{ route('home') }}"
                    class="flex items-center justify-center w-full sm:w-40 py-3 border border-emerald-500 shadow-sm text-sm font-medium rounded-md text-emerald-500 bg-transparent hover:bg-white-trans focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                    Back to Home
                </a>
            </div>
            <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}"
                class="hidden">
                @csrf
            </form>
        </div>
        {{-- <div class="flex">
        <div class="w-full">

            @if (session('resent'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100  px-3 py-4 mb-4"
                role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Verify Your Email Address') }}
                </header>

                <div class="w-full flex flex-wrap text-gray-700 leading-normal text-sm p-6 space-y-4 sm:text-base sm:space-y-6">
                    <p>
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </p>

                    <p>
                        {{ __('If you did not receive the email') }}, <a
                            class="text-blue-500 hover:text-blue-700 no-underline hover:underline cursor-pointer"
                            onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
                    </p>

                    <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}"
                        class="hidden">
                        @csrf
                    </form>
                </div>

            </section>
        </div>
    </div> --}}
        @if (session('resent'))
            <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                        <div>
                            <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-8 w-8 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    Email Sent Successfully
                                </h3>
                                <div class="mt-2 mx-4">
                                    <p class="text-sm text-gray-500">
                                        Please check your email and click the link to verify your account.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <a href="{{ route('home') }}"
                                class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-emerald-500 text-base font-medium text-white hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 sm:text-sm">
                                Go back to home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection
