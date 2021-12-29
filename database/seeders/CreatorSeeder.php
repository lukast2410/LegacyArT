<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creators')->insert([
            'user_id' => 2,
            'banner_image' => 'banner/8cdf2ece-2679-4178-937c-0d8fc47dd6c2.jpg',
            'bio' => 'NFT lovers, art collectors',
            'created_at' => now()
        ]);
        DB::table('creators')->insert([
            'user_id' => 3,
            'banner_image' => 'banner/b80147f0-3ace-4fbd-8344-84b4ce3af711.jpg',
            'bio' => 'TO THE MOON!!!',
            'created_at' => now()
        ]);
    }
}
