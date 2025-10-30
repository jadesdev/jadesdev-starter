<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            [
                'email' => 'admin@gmail.com',
            ],
            [
                'name' => 'Jadesdev Admin',
                'password' => Hash::make('password123'),
                'phone' => '+23480123456789',
                'is_active' => true,
                'type' => 'super',
            ]
        );
    }
}
