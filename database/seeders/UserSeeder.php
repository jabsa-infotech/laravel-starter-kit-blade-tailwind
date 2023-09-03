<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ])->assignRole('ADMIN');

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ])->assignRole('USER');
    }
}
