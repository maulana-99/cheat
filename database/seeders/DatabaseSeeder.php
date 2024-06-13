<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Fasilitas;

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

        Fasilitas::factory()->create([
            'nama_fasilitas' => 'Kamar_mandi',
            'deskripsi_fasilitas' => 'Setiap kamar meiliki kamar mandi',
            'foto_fasilitas' => 'https://i.pinimg.com/736x/91/13/a7/9113a712dd6784e1a9b1e9325272e1a3.jpg',
        ]);
        Fasilitas::factory()->create([
            'nama_fasilitas' => 'TV Tembok',
            'deskripsi_fasilitas' => 'Setiap kamar meiliki TV',
            'foto_fasilitas' => 'https://image.made-in-china.com/202f0j00uUKkGeawnNbW/TV-Wall-Units-LED-Light-Marble-Top-Wooden-TV-Cabinet.jpg',
        ]);
        Fasilitas::factory()->create([
            'nama_fasilitas' => 'Resto',
            'deskripsi_fasilitas' => 'Hotel memiliki resto di lantai 1',
            'foto_fasilitas' => 'https://ik.imagekit.io/tvlk/blog/2021/10/Djaman-Doeloe-Restaurant-Four-Points-by-Sheraton-Surabaya-Pakuwon-Indah-1024x683.jpg?tr=dpr-2,w-675',
        ]);
    }
}
