<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin ES',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Prof. Expert',
            'email' => 'expert@gmail.com',
            'password' => Hash::make('expert123'),
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
        ]);
    }
}
