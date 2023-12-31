<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Admin 
            [
                'name' => 'Mohamed',
                'username' => 'Ben Yamine',
                'email' => 'ben794900@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => 'admin',
                'status' => 'active',
            ],
             // User 
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
            ], 

        ]);
    }
}
