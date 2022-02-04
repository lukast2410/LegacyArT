<div
    class="h-full min-h-min flex flex-col bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
    {{-- TODO: Redirect to Art Detail Page --}}
    <a class="min-h-3/5" href="">
        {{-- TODO: Show Art Image --}}
        <img class="w-full h-full object-cover object-center bg-emerald-100" src=""
            alt="Art Image">
    </a>
    <div class="w-full flex-1 pt-3 px-5 pb-5">
        {{-- TODO: Redirect to Art Detail Page --}}
        <a href=""
            class="block text-2xl font-bold text-emerald-800 truncate">Art Name</a>
        <div class="flex mt-3">
            {{-- TODO: Redirect to Art Creator Profile Page --}}
            <a href=""
                class="flex space-x-2 items-center text-gray-500 hover:text-gray-700">
                <div class="h-8 w-8 rounded-full overflow-hidden bg-gray-50">
                    {{-- TODO: If user from google, get profile image from the url --}}
                    <img src="" alt="Creator Profile from Google" class="h-full w-full object-cover">
                    {{-- TODO: If user is not from google, get profile image from storage --}}
                    <img src="" alt="Creator Profile from Storage"
                        class="h-full w-full object-cover object-center">
                    {{-- END --}}
                </div>
                <span class="font-bold">Creator Nickname</span>
            </a>
        </div>
    </div>
    <div class="bg-emerald-800 w-full py-4 px-5 text-white flex justify-between">
        {{-- TODO: Redirect to Art Detail Page --}}
        <a href="" class="flex-1 mr-3">
            {{-- TODO: If art has been sold --}}
                <h3 class="text-emerald-400 font-medium">Last sold for</h3>
                <h2 class="text-xl font-semibold">
                    Sold Price ETH</h2>
            {{-- TODO: If there is at least one bid --}}
                <h3 class="text-emerald-400 font-medium">Current bid</h3>
                <h2 class="text-xl font-semibold">
                    Highest Bid Amount ETH</h2>
            {{-- TODO: If there is no bid yet --}}
                <h3 class="text-emerald-400 font-medium">Start bid</h3>
                <h2 class="text-xl font-semibold">
                    Start Price ETH</h2>
            {{-- END --}}
        </a>
        {{-- TODO: If art has been sold --}}
            <div class="text-right">
                {{-- TODO: Redirect to Art Detail Page --}}
                <a href="">
                    <h3 class="text-emerald-400 font-medium">Owned by</h3>
                </a>
                {{-- TODO: Redirect to Art Owner Profile Page --}}
                <a href=""
                    class="text-gray-300 hover:text-white">
                    <h2 class="text-md leading-8 font-semibold">
                        Owner Nickname
                    </h2>
                </a>
            </div>
        {{-- TODO: If there is at least one bid --}}
            <div class="text-right">
                {{-- TODO: Redirect to Art Detail Page --}}
                <a href="">
                    <h3 class="text-emerald-400 font-medium">Last bid by</h3>
                </a>
                {{-- TODO: Redirect to Highest Bidder Profile Page --}}
                <a href=""
                    class="text-gray-300 hover:text-white">
                    <h2 class="text-md leading-8 font-semibold">
                        Highest Bidder Nickname
                    </h2>
                </a>
            </div>
        {{-- END --}}
    </div>
</div>
