<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'username' => "user{$i}",
                'email' => "user{$i}@example.com",
                'password' => Hash::make("password{$i}"),
                'role_id' => 2,
            ]);
        }
    }
}
