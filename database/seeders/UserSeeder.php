<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Super Admin', 'email' => 'super@example.com', 'role' => 'super'],
            ['name' => 'Admin', 'email' => 'admin@example.com', 'role' => 'admin'],
            ['name' => 'Agent', 'email' => 'agent@example.com', 'role' => 'agent'],
            ['name' => 'Client', 'email' => 'client@example.com', 'role' => 'client'],
            ['name' => 'User', 'email' => 'user@example.com', 'role' => 'user'],
        ];

        foreach ($users as $userData) {
            User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make('password'),
                'role' => $userData['role'],
                'is_active' => true,
            ]);
        }
    }
}
