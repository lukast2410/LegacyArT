@extends('layouts.sign')

@section('content')
    <main class="w-full sm:w-11/12 mx-auto max-w-screen-lg flex items-center h-screen overflow-hidden">
        <div
            class="bg-gradient-to-br from-emerald-50 to-emerald-100 w-full px-8 sm:px-10 py-10 sm:bg-gray-50 sm:bg-none rounded-2xl text-center shadow-lg h-full sm:h-fit">
            <h1 class="text-3xl sm:text-4xl font-medium text-gray-700">Verify your email</h1>
            <h3 class="text-gray-500 mt-3 font-medium">You will need to verify your email to continue</h3>
            <img src="{{ asset('images/email-sent.png') }}" alt="Email Sent" class="h-full max-h-60 my-10 mx-auto">
            {{-- TODO: If email verification resent, show success message. START --}}
            <div class="max-w-screen-md mx-auto rounded-md bg-emerald-200 p-4 mb-4">
                <div class="flex justify-center">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-emerald-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-emerald-700">
                            Successfully Resend Verification
                        </p>
                    </div>
                </div>
            </div>
            {{-- END success message --}}
            <p class="text-xs sm:text-sm text-gray-400 font-medium max-w-2xl mx-auto">An email has been sent to
                {{-- TODO: Show User's Email --}} with a link to verify your account. If you have not received the email after a few
                minutes, please check your spam folder.</p>
            <div
                class="mx-auto w-full max-w-sm flex justify-between items-center flex-col sm:flex-row space-y-4 sm:space-y-0 mt-6 sm:mt-8">
                <button type="button"
                    class="flex items-center justify-center w-full sm:w-40 py-3 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-500 hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500"
                    onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">
                    Resend Email
                </button>
                {{-- TODO: Redirect to Home --}}
                <a href=""
                    class="flex items-center justify-center w-full sm:w-40 py-3 border border-emerald-500 shadow-sm text-sm font-medium rounded-md text-emerald-500 bg-transparent hover:bg-white-trans focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                    Back to Home
                </a>
            </div>
            {{-- TODO: Provide resend email verification action --}}
            <form id="resend-verification-form" method="POST" action=""
                class="hidden">
                @csrf
            </form>
        </div>
    </main>
@endsection
