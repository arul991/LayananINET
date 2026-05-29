<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Customer;
use App\Models\Teknisi;
use App\Models\PaketInternet;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Layanan INET',
            'email' => 'admin@layananinet.local',
            'phone' => '081234567890',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $user = User::create([
                'name' => "Teknisi $i",
                'email' => "teknisi$i@layananinet.local",
                'phone' => '0812345678' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('teknisi123'),
                'role' => 'teknisi',
                'is_active' => true,
            ]);

            Teknisi::create([
                'user_id' => $user->id,
                'teknisi_code' => 'TK-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'alamat' => "Jl. Teknisi No. $i",
                'wilayah' => 'Area ' . $i,
                'rating' => 4.5,
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            $user = User::create([
                'name' => "Pelanggan $i",
                'email' => "pelanggan$i@email.com",
                'phone' => '0812345678' . str_pad($i + 3, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('pelanggan123'),
                'role' => 'customer',
                'is_active' => true,
            ]);

            Customer::create([
                'user_id' => $user->id,
                'nik' => '3276' . str_pad($i, 12, '0', STR_PAD_LEFT),
                'alamat' => "Jl. Pelanggan No. $i",
                'kota' => 'Jakarta',
                'kecamatan' => 'Kecamatan ' . $i,
                'kelurahan' => 'Kelurahan ' . $i,
            ]);
        }

        $pakets = [
            [
                'nama_paket' => 'Paket Hemat',
                'kecepatan' => 10,
                'harga' => 99000,
                'deskripsi' => 'Paket internet hemat untuk keluarga',
                'status' => true,
            ],
            [
                'nama_paket' => 'Paket Standar',
                'kecepatan' => 25,
                'harga' => 199000,
                'deskripsi' => 'Paket internet standar untuk produktivitas',
                'status' => true,
            ],
            [
                'nama_paket' => 'Paket Premium',
                'kecepatan' => 50,
                'harga' => 349000,
                'deskripsi' => 'Paket internet premium untuk streaming',
                'status' => true,
            ],
            [
                'nama_paket' => 'Paket Ultra',
                'kecepatan' => 100,
                'harga' => 599000,
                'deskripsi' => 'Paket internet ultra cepat',
                'status' => true,
            ],
        ];

        foreach ($pakets as $paket) {
            PaketInternet::create($paket);
        }
    }
}
