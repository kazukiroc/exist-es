<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Administrator',
        ]);
        DB::table('roles')->insert([
            'name' => 'expert',
            'display_name' => 'Expert',
            'description' => 'Expert',
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
            'display_name' => 'User',
            'description' => 'User',
        ]);
    }
}
