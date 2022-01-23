<div
    class="h-full min-h-min flex flex-col bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg hover:-translate-y-0.5 transition-all">
    <a class="min-h-3/5" href="{{ route('art.detail', $art->id) }}">
        <img class="w-full h-full object-cover object-center bg-emerald-100" src="{{ asset('storage/' . $art->art_image) }}"
            alt="Art Image">
    </a>
    <div class="w-full flex-1 pt-3 px-5 pb-5">
        <a href="{{ route('art.detail', $art->id) }}"
            class="block text-2xl font-bold text-emerald-800 truncate">{{ $art->name }}</a>
        <div class="flex mt-3">
            <a href="{{ route('user.profile', '@' . $art->creator->user->nickname) }}"
                class="flex space-x-2 items-center text-gray-500 hover:text-gray-700">
                <img class="h-8 w-8 rounded-full overflow-hidden object-cover object-center"
                    src="{{ asset('storage/' . $art->creator->user->profile_image) }}" alt="Creator Profile">
                <span class="font-bold">{{ '@' . $art->creator->user->nickname }}</span>
            </a>
        </div>
    </div>
    <div class="bg-emerald-800 w-full py-4 px-5 text-white flex justify-between">
        <a href="{{ route('art.detail', $art->id) }}" class="flex-1 mr-3">
            @if ($art->owner)
                <h3 class="text-emerald-400 font-medium">Last sold for</h3>
                <h2 class="text-xl font-semibold">
                    {{ number_format(floor($art->sold_price)) . (count(explode('.', $art->sold_price)) == 2 ? '.' . explode('.', $art->sold_price)[1] : '') }}
                    ETH</h2>
            @elseif ($lastBid)
                <h3 class="text-emerald-400 font-medium">Current bid</h3>
                <h2 class="text-xl font-semibold">
                    {{ number_format(floor($lastBid->amount)) . (count(explode('.', $lastBid->amount)) == 2 ? '.' . explode('.', $lastBid->amount)[1] : '') }}
                    ETH</h2>
            @else
                <h3 class="text-emerald-400 font-medium">Start bid</h3>
                <h2 class="text-xl font-semibold">
                    {{ number_format(floor($art->start_price)) . (count(explode('.', $art->start_price)) == 2 ? '.' . explode('.', $art->start_price)[1] : '') }}
                    ETH</h2>
            @endif
        </a>
        @if ($art->owner)
            <div class="text-right">
                <a href="{{ route('art.detail', $art->id) }}">
                    <h3 class="text-emerald-400 font-medium">Owned by</h3>
                </a>
                <a href="{{ route('user.profile', '@' . $art->owner->nickname) }}"
                    class="text-gray-300 hover:text-white">
                    <h2 class="text-md leading-8 font-semibold">
                        {{ '@' . $art->owner->nickname }}
                    </h2>
                </a>
            </div>
        @elseif ($lastBid)
        <div class="text-right">
            <a href="{{ route('art.detail', $art->id) }}">
                <h3 class="text-emerald-400 font-medium">Last bid by</h3>
            </a>
            <a href="{{ route('user.profile', '@' . $lastBid->user->nickname) }}"
                class="text-gray-300 hover:text-white">
                <h2 class="text-md leading-8 font-semibold">
                    {{ '@' . $lastBid->user->nickname }}
                </h2>
            </a>
        </div>
        @endif
    </div>
</div>
