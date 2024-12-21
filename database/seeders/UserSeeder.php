<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@mail.com',
            'role' => 2,
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => "Author",
            'email' => 'author@mail.com',
            'role' => 2,
            'password' => Hash::make('12345678'),
        ]);
    }
}
