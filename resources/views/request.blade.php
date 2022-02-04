@extends('layouts.app')

@section('content')
    <main class="w-full max-w-screen-lg lg:mx-auto px-6">
        {{-- TODO: Provide Request Creator Action --}}
        <form class="rounded-lg shadow-md my-8 bg-white p-8" action="" method="" >
            @csrf

            <h1 class="text-2xl sm:text-4xl font-medium text-emerald-600">Apply Request</h1>

            <div class="mt-8">
                <label for="reason" class="block text-sm font-medium text-gray-700">
                    Reason
                </label>
                <div class="mt-1">
                    <textarea id="reason" name="reason" rows="5"
                        class="@error('reason') border-red-500 @enderror shadow-sm focus:border-emerald-400 block w-full sm:text-sm border-2 border-gray-200 rounded-md outline-none px-2 py-1.5"
                        autofocus value="{{ old('reason') }}"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Write a few reasons why you want to be a creator.</p>

                {{-- TODO: If Reason is invalid, Provide Error Message --}}
                <p class="text-red-500 text-xs italic mt-0.5">
                    Error message
                </p>
            </div>

            <div class="mt-6">
                <label for="banner" class="block text-sm font-medium text-gray-700">
                    Banner image
                </label>
                <div
                    class="@error('banner') border-red-500 @enderror mt-1 flex justify-center px-6 py-16 border-2 border-gray-300 border-dashed rounded-md relative">
                    <label for="banner" class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                            aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-xs text-gray-500">
                            PNG, JPG, GIF up to 5MB
                        </p>

                        <div class="absolute top-0 left-0 w-full h-full z-10 overflow-hidden rounded-md">
                            <img id="profile_preview" src="" alt="" class="h-full w-full object-cover opacity-0">
                        </div>

                        <div
                            class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-black-trans opacity-0 hover:opacity-100 z-20 cursor-pointer rounded-md overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </label>
                </div>
                <input id="banner" name="banner" type="file" class="sr-only">

                {{-- TODO: If Banner is invalid, Provide Error Message --}}
                <p class="text-red-500 text-xs italic mt-0.5">
                    Error message
                </p>
            </div>

            <div class="mt-6">
                <label for="bio" class="block text-sm font-medium text-gray-700">
                    Bio
                </label>
                <div class="mt-1">
                    <textarea id="bio" name="bio" rows="5"
                        class="@error('bio') border-red-500 @enderror shadow-sm focus:border-emerald-400 block w-full sm:text-sm border-2 border-gray-200 rounded-md outline-none px-2 py-1.5" value="{{ old('bio') }}"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>

                {{-- TODO: If Bio is invalid, Provide Error Message --}}
                <p class="text-red-500 text-xs italic mt-0.5">
                    Error message
                </p>
            </div>

            <button type="submit"
                class="w-full select-none font-bold whitespace-no-wrap p-2.5 rounded-lg text-base leading-normal no-underline text-white bg-emerald-400 hover:bg-emerald-500 mt-8">
                {{ __('Request') }}
            </button>
        </form>
    </main>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#banner').change(function() {
                $('#profile_preview').removeClass('opacity-0')
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#profile_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
