<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'user',
            'created_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'creator',
            'created_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'created_at' => now()
        ]);
    }
}
