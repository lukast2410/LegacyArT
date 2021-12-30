<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'nickname' => 'admin24',
            'password' => bcrypt('admin123'),
            'profile_image' => 'profile/68a11aef-d169-4f64-964d-701b11696076.jpg',
            'email_verified_at' => now(),
            'role_id' => 3,
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'First Creator',
            'email' => 'first@mail.com',
            'nickname' => 'first_creator',
            'password' => bcrypt('first123'),
            'profile_image' => 'profile/a1e6f81d-e8d2-4aab-94e8-19bec39f7281.png',
            'email_verified_at' => now(),
            'role_id' => 2,
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Legends',
            'email' => 'legends@mail.com',
            'nickname' => 'legends',
            'password' => bcrypt('legends123'),
            'profile_image' => 'profile/e7b1bb88-81ab-47fd-99e4-fe2a98b67dca.jpg',
            'email_verified_at' => now(),
            'role_id' => 2,
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Only User',
            'email' => 'only.user@mail.com',
            'nickname' => 'only_user',
            'password' => bcrypt('user123'),
            'profile_image' => 'profile/eb581017-2401-4e2f-a3b4-65b725555e46.jpg',
            'email_verified_at' => now(),
            'role_id' => 1,
            'created_at' => now()
        ]);
    }
}
