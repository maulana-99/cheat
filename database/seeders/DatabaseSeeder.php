<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Kamar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 10 user secara acak
        // User::factory(10)->create();

        // Buat user 
        User::factory()->create([
            'name' => 'tamu',
            'email' => 'tamu@gmail.com',
            'role' => 'tamu',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'resepsionis',
            'email' => 'resepsionis@gmail.com',
            'role' => 'resepsionis',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
        ]);

        // Buat kamar 
        Kamar::factory()->create([
            'nomor_kamar' => 'A01',
            'nama_kamar' => 'Simple Room',
            'tipe_kamar' => 'standard',
            'bed' => 'single',
            'kapasitas' => '1',
            'status' => '1',
        ]);

        Kamar::factory()->create([
            'nomor_kamar' => 'A02',
            'nama_kamar' => 'Simple Room',
            'tipe_kamar' => 'standard',
            'bed' => 'single',
            'kapasitas' => '1',
            'status' => '1',
        ]);

        Kamar::factory()->create([
            'nomor_kamar' => 'A03',
            'nama_kamar' => 'Simple Room',
            'tipe_kamar' => 'standard',
            'bed' => 'single',
            'kapasitas' => '1',
            'status' => '1',
        ]);

        Kamar::factory()->create([
            'nomor_kamar' => 'A04',
            'nama_kamar' => 'Family Room',
            'tipe_kamar' => 'standard',
            'bed' => 'king',
            'kapasitas' => '4',
            'status' => '1',
        ]);

        Kamar::factory()->create([
            'nomor_kamar' => 'A05',
            'nama_kamar' => 'Single Room',
            'tipe_kamar' => 'delux',
            'bed' => 'king',
            'kapasitas' => '1',
            'status' => '1',
        ]);

        Kamar::factory()->create([
            'nomor_kamar' => 'A06',
            'nama_kamar' => 'Double Room',
            'tipe_kamar' => 'delux',
            'bed' => 'king',
            'kapasitas' => '1',
            'status' => '1',
        ]);
    }
}
