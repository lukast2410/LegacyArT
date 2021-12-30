<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->insert([
            'user_id' => 4,
            'art_id' => 'f392fbf4-0216-45e1-bba5-610f6c2cbe99',
            'amount' => 50.5,
            'fee' => 0.02525,
            'status' => 'rejected',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 2,
            'art_id' => 'f392fbf4-0216-45e1-bba5-610f6c2cbe99',
            'amount' => 123,
            'fee' => 0.0615,
            'status' => 'accepted',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 3,
            'art_id' => '56d7f092-6b58-4fda-9ea0-831dbc78a731',
            'amount' => 350,
            'fee' => 0.175,
            'status' => 'accepted',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 3,
            'art_id' => 'ae5ec4d7-ce12-4e30-bf75-b67995e1046c',
            'amount' => 45.5,
            'fee' => 0.02275,
            'status' => 'accepted',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 4,
            'art_id' => '7bd45e39-d498-4270-b2d4-0e8d91f0f560',
            'amount' => 1.5,
            'fee' => 0.00075,
            'status' => 'rejected',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 2,
            'art_id' => '7bd45e39-d498-4270-b2d4-0e8d91f0f560',
            'amount' => 2.1,
            'fee' => 0.00105,
            'status' => 'rejected',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 4,
            'art_id' => '7bd45e39-d498-4270-b2d4-0e8d91f0f560',
            'amount' => 2.75,
            'fee' => 0.001375,
            'status' => 'rejected',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 2,
            'art_id' => '7bd45e39-d498-4270-b2d4-0e8d91f0f560',
            'amount' => 3.35,
            'fee' => 0.001675,
            'status' => 'accepted',
            'created_at' => now(),
        ]);
        DB::table('bids')->insert([
            'user_id' => 4,
            'art_id' => '6cdc28ec-ccfb-443d-a21a-4d6fc93bd4cf',
            'amount' => 0.75,
            'fee' => 0.000375,
            'status' => 'ongoing',
            'created_at' => now(),
        ]);
    }
}
