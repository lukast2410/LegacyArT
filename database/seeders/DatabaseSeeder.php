<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('roles')->insert([
            'name' => 'user'
        ]);
        DB::table('roles')->insert([
            'name' => 'creator'
        ]);
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'nickname' => 'admin24',
            'password' => bcrypt('admin123'),
            'profile_image' => '',
            'email_verified_at' => now(),
            'role_id' => 3,
        ]);
    }
}
