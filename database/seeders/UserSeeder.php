<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Aisya Aryani Wijaya',
            'email' => 'aisyaaryaniwijaya@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('aisya12345'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
