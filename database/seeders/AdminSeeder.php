<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@layananinet.test',
            'phone' => '081234567890',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Customer Demo',
            'email' => 'customer@layananinet.test',
            'phone' => '081234567891',
            'password' => Hash::make('password'),
            'role' => 'customer',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Teknisi Demo',
            'email' => 'teknisi@layananinet.test',
            'phone' => '081234567892',
            'password' => Hash::make('password'),
            'role' => 'teknisi',
            'is_active' => true,
        ]);
    }
}