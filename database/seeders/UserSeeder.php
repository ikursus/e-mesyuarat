<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User 1
        DB::table('users')->insert([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('pass123'), // Hash::make('pass123')
            'phone' => '0123456789'
        ]);

        // User 2
        DB::table('users')->insert([
            'name' => 'Abu',
            'email' => 'abu@gmail.com',
            'password' => bcrypt('pass123'), // Hash::make('pass123')
            'phone' => '0123456789'
        ]);

        // User 3
        DB::table('users')->insert([
            'name' => 'Siti',
            'email' => 'siti@gmail.com',
            'password' => bcrypt('pass123'), // Hash::make('pass123')
            'phone' => '0123456789'
        ]);

        // User 4
        DB::table('users')->insert([
            'name' => 'Aminah',
            'email' => 'aminah@gmail.com',
            'password' => bcrypt('pass123'), // Hash::make('pass123')
            'phone' => '0123456789'
        ]);

        // User 5
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => bcrypt('pass123'), // Hash::make('pass123')
            'phone' => '0123456789'
        ]);
    }
}
