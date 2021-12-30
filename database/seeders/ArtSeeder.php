<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('art')->insert([
            'id' => 'f392fbf4-0216-45e1-bba5-610f6c2cbe99',
            'creator_id' => 2,
            'owner_id' => 2,
            'name' => 'Hip Hop Shiba',
            'art_image' => 'art/1fa61960-d163-41d6-835f-a26c5368335a.png',
            'description' => 'The Shiba Social Club is a collection of 7777 Shiba NFTs inspired by the new wealthy generation of crypto-currency and NFTs. Each piece is a unique 3d artwork with a collection of more than 150+ traits. The objective is to build the strongest community and project around NFTs.',
            'start_price' => 1,
            'sold_price' => 123,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => Str::orderedUuid(),
            'creator_id' => 1,
            'name' => 'Technicolor',
            'art_image' => 'art/5b1b2986-22f5-4e2b-9349-eade6a19117f.jpg',
            'description' => 'The original Arcus collection by Rik Oostenbroek.',
            'start_price' => 0.5,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => Str::orderedUuid(),
            'creator_id' => 1,
            'name' => 'CryptoKitties #229795',
            'art_image' => 'art/8d8ef889-4edd-49da-aef8-6ae909b79d05.png',
            'description' => 'Mahalo! I\'m Kitty. I\'m a professional Foreign Film Director and I love steak. When my owner isn\'t watching, I steal their silk scarves and use them for litter paper. I\'m not sorry. Our friendship will be gorgeous, voluptuous, and full of wet food.',
            'start_price' => 0.25,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => Str::orderedUuid(),
            'creator_id' => 2,
            'name' => 'White Shiba',
            'art_image' => 'art/9d16e3f2-4a33-4c7d-ae2d-f467fded78cc.png',
            'description' => 'The Shiba Social Club is a collection of 7777 Shiba NFTs inspired by the new wealthy generation of crypto-currency and NFTs. Each piece is a unique 3d artwork with a collection of more than 150+ traits. The objective is to build the strongest community and project around NFTs.',
            'start_price' => 0.35,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => '56d7f092-6b58-4fda-9ea0-831dbc78a731',
            'creator_id' => 1,
            'owner_id' => 3,
            'name' => 'CryptoKitties #5',
            'art_image' => 'art/39edab06-9595-4d7d-8fb6-23dace7d1af9.png',
            'description' => 'winces. My name is CryptoKitties #5. I love to wear magenta. I\'m well-educated, don\'t worry. If I were a cheese, I would definitely be goat cheese, no question.',
            'start_price' => 3,
            'sold_price' => 350,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => 'ae5ec4d7-ce12-4e30-bf75-b67995e1046c',
            'creator_id' => 1,
            'owner_id' => 3,
            'name' => 'Arcus #18 - Goliath',
            'art_image' => 'art/83c3b580-dbd3-4cda-9ef6-5250878de0f0.jpg',
            'description' => 'The original Arcus collection by Rik Oostenbroek.',
            'sold_price' => 45.5,
            'start_price' => 1.5,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => '7bd45e39-d498-4270-b2d4-0e8d91f0f560',
            'creator_id' => 2,
            'owner_id' => 2,
            'name' => 'Metaclubber',
            'art_image' => 'art/95ba636b-5b07-4ee0-8c60-2b4fe8791e79.gif',
            'description' => 'Metaclubber - Not Revealed',
            'start_price' => 0.5,
            'sold_price' => 3.35,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => Str::orderedUuid(),
            'creator_id' => 1,
            'name' => 'Mocha Slippybean',
            'art_image' => 'art/9456eff7-5456-49cf-b525-7f4860d5d1d8.png',
            'description' => 'Salutations. I respond to Mocha Slippybean, although that doesn\'t mean I\'ll acknowledge you. I\'m trying to consume at least one serving of vegan burgers every day. It\'s a newer health thing I read about on the web. Whenever I hear LCD Soundsystem I just have to kiss.',
            'start_price' => 0.45,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => '6cdc28ec-ccfb-443d-a21a-4d6fc93bd4cf',
            'creator_id' => 2,
            'name' => 'Shiba #1316',
            'art_image' => 'art/71934122-cfc3-4549-89d1-568c1ce1502b.png',
            'description' => 'The Shiba Social Club is a collection of 7777 Shiba NFTs inspired by the new wealthy generation of crypto-currency and NFTs. Each piece is a unique 3d artwork with a collection of more than 150+ traits. The objective is to build the strongest community and project around NFTs.',
            'start_price' => 0.25,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => Str::orderedUuid(),
            'creator_id' => 1,
            'name' => 'Arcus #28 - Blush',
            'art_image' => 'art/ae041e45-ba58-4f42-834d-fc9743006d26.jpg',
            'description' => 'The original Arcus collection by Rik Oostenbroek.',
            'start_price' => 0.1,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => Str::orderedUuid(),
            'creator_id' => 1,
            'name' => 'Crypto Champions #7115',
            'art_image' => 'art/ce30b435-5744-438b-878c-2fb428c49d59.png',
            'description' => 'Crypto Champions is a collection of 8,888 unique NFT characters divided into two factions living on the Ethereum blockchain. Each Champion is an original combination of attributes ready to fight in the upcoming metawar. It is the first collection to feature exceptional and ultra-realistic 3D human soldier artwork and offers holders a first-of-its-kind utility.',
            'start_price' => 0.3,
            'created_at' => now()
        ]);
        DB::table('art')->insert([
            'id' => Str::orderedUuid(),
            'creator_id' => 1,
            'name' => 'Crypto Champions #8669',
            'art_image' => 'art/d904561a-c266-41ad-9240-265ea5aa5e11.png',
            'description' => 'Crypto Champions is a collection of 8,888 unique NFT characters divided into two factions living on the Ethereum blockchain. Each Champion is an original combination of attributes ready to fight in the upcoming metawar. It is the first collection to feature exceptional and ultra-realistic 3D human soldier artwork and offers holders a first-of-its-kind utility.',
            'start_price' => 0.55,
            'created_at' => now()
        ]);
    }
}
