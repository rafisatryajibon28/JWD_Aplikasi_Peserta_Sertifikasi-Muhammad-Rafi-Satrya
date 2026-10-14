<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Skema;
use App\Models\Peserta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Administrator',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role'     => 'admin',
        ]);

        User::create([
            'name'     => 'Peserta Demo',
            'email'    => 'peserta@gmail.com',
            'password' => Hash::make('peserta123'),
            'role'     => 'peserta',
        ]);


        $skema1 = Skema::create([
            'kode_skema' => 'JWD-001',
            'nama_skema' => 'Junior Web Developer',
            'deskripsi'  => 'Skema sertifikasi untuk kemampuan pemrograman web dasar.',
        ]);

        $skema2 = Skema::create([
            'kode_skema' => 'JMD-001',
            'nama_skema' => 'Junior Mobile Developer',
            'deskripsi'  => 'Skema sertifikasi pengembangan aplikasi mobile.',
        ]);

        $skema3 = Skema::create([
            'kode_skema' => 'JDA-001',
            'nama_skema' => 'Junior Data Analyst',
            'deskripsi'  => 'Skema sertifikasi analisis data dasar.',
        ]);

    }
}
