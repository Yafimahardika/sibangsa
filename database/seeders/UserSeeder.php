<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@banksampah.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Petugas',
            'role' => 'petugas',
            'email' => 'petugas@banksampah.com',
            'password' => bcrypt('password')
        ]);
    }
}
