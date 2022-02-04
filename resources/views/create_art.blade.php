@extends('layouts.app')

@section('content')
    <main class="w-full max-w-screen-lg lg:mx-auto px-6 sm:px-8">
        {{-- TODO: Create Art Action --}}
        <form class="rounded-lg shadow-md my-8 bg-white p-6 sm:p-8" action="" method="">
            @csrf

            <h1 class="text-2xl sm:text-4xl font-medium text-emerald-600">Create Art</h1>

            <h4 class="block text-sm font-medium text-gray-700 mt-8">Art Image</h4>
            <div class="mt-1 flex flex-wrap items-center justify-start @error('art_image') border-red-500 @enderror">
                <label for="art_image">
                    <span
                        class="relative inline-block w-60 h-60 sm:h-96 sm:w-96 rounded-xl overflow-hidden bg-emerald-100 overflow-hidden cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full text-emerald-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="absolute top-0 left-0 w-full h-full z-10 overflow-hidden">
                            <img id="art_preview" src="" alt="" class="h-full object-cover">
                        </div>
                        <div
                            class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-black-trans opacity-0 hover:opacity-100 z-20">
                            <svg class="h-16 w-16 text-gray-600" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </span>
                </label>
            </div>
            <input id="art_image" type="file" class="hidden" name="art_image" value="Profile">
            {{-- TODO: If Art Image is invalid, Provide Error Message --}}
            <p class="text-red-500 text-xs italic mt-0.5">
                Error message
            </p>

            <div class="mt-6">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    Art Name
                </label>
                <div class="mt-1">
                    <input id="name" type="text"
                        class="@error('name') border-red-500 @enderror appearance-none border-2 border-gray-200 rounded-md w-full shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2"
                        name="name" required autocomplete="name" value="{{ old('name') }}" autofocus>
                </div>

                {{-- TODO: If Art Name is invalid, Provide Error Message --}}
                <p class="text-red-500 text-xs italic mt-0.5">
                    Error message
                </p>
            </div>

            <div class="flex flex-col mt-6">
                <label for="start_price" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Start Price') }}:
                </label>

                <div class="flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-200 bg-gray-50 text-emerald-600 font-medium sm:text-sm">
                        ETH
                    </span>
                    {{-- TODO: Validate the minimum and it must be 2 digits maximum after comma --}}
                    <input id="start_price" type="number"
                        class="form-input flex-1 min-w-0 block w-full @error('start_price') border-red-500 @enderror appearance-none border-2 border-gray-200 shadow-sm focus:outline-none focus:shadow-none focus:border-emerald-400 sm:text-sm px-3 py-2 rounded-none rounded-r-md"
                        name="start_price" required autocomplete="start_price" placeholder="5.00" min="" value="{{ old('start_price') }}">
                </div>

                {{-- TODO: If Start Price is invalid, Provide Error Message --}}
                <p class="text-red-500 text-xs italic mt-0.5">
                    Error message
                </p>
            </div>

            <div class="mt-6">
                <label for="description" class="block text-sm font-medium text-gray-700">
                    Description
                </label>
                <div class="mt-1">
                    <textarea id="description" name="description" rows="5"
                        class="@error('description') border-red-500 @enderror shadow-sm focus:border-emerald-400 block w-full sm:text-sm border-2 border-gray-200 rounded-md outline-none px-2 py-1.5" value="{{ old('description') }}"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about your art.</p>

                {{-- TODO: If Art Description is invalid, Provide Error Message --}}
                <p class="text-red-500 text-xs italic mt-0.5">
                    Error message
                </p>
            </div>

            <button type="submit"
                class="w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-white bg-emerald-400 hover:bg-emerald-500 mt-8">
                {{ __('Create') }}
            </button>
        </form>
    </main>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#art_image').change(function() {
                $('#art_preview').removeClass('opacity-0')
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#art_preview').attr('src', e.target.result);
                    $('#art_preview').addClass('w-full')
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
