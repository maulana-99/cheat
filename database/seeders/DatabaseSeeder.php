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

        Kamar::factory()->create([
            'nama_kamar' => 'Simple Room',
            'tipe_kamar' => 'standard',
            'bed' => 'single',
            'kapasitas' => '1',
            'deskripsi' => 'Kamar simple dengan single bed cocok untuk bersantai di weekend',
            'quantity' => 10,
        ]);

        Kamar::factory()->create([
            'nama_kamar' => 'Family Room',
            'tipe_kamar' => 'standard',
            'bed' => 'king',
            'kapasitas' => '4',
            'deskripsi' => 'Kamar keluarga dengan king bed cocok untuk bersantai di weekend bersama anak dan istri',
            'quantity' => 10,
        ]);

        Fasilitas::factory()->create([
            'nama_fasilitas' => 'Kamar mandi',
            'deskripsi_fasilitas' => 'Setiap kamar memiliki kamar mandi dengan Wastafel,dan Toilet',
            'foto_fasilitas' => 'https://i.pinimg.com/736x/91/13/a7/9113a712dd6784e1a9b1e9325272e1a3.jpg',
        ]);

        Fasilitas::factory()->create([
            'nama_fasilitas' => 'TV Tembok',
            'deskripsi_fasilitas' => 'Setiap kamar memiliki TV',
            'foto_fasilitas' => 'https://image.made-in-china.com/202f0j00uUKkGeawnNbW/TV-Wall-Units-LED-Light-Marble-Top-Wooden-TV-Cabinet.jpg',
        ]);

        Fasilitas::factory()->create([
            'nama_fasilitas' => 'Resto',
            'deskripsi_fasilitas' => 'Hotel memiliki resto di lantai 1',
            'foto_fasilitas' => 'https://ik.imagekit.io/tvlk/blog/2021/10/Djaman-Doeloe-Restaurant-Four-Points-by-Sheraton-Surabaya-Pakuwon-Indah-1024x683.jpg?tr=dpr-2,w-675',
        ]);
    }
}
