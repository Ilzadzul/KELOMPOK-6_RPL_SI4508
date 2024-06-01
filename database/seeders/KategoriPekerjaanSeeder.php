<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriPekerjaanSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'billa',
            'fullname' => 'billa',
            'user_type' => 'Admin',
            'password' => Hash::make('123456'),
        ]);
        KategoriPekerjaan::create([
            'nama_kategori' => 'IT & Software',
            'deskripsi' => 'Kategori untuk pekerjaan IT dan software development.',
        ]);

        KategoriPekerjaan::create([
            'nama_kategori' => 'Finance',
            'deskripsi' => 'Kategori untuk pekerjaan di bidang keuangan.',
        ]);

        KategoriPekerjaan::create([
            'nama_kategori' => 'Healthcare',
            'deskripsi' => 'Kategori untuk pekerjaan di bidang kesehatan.',
        ]);
    }
}
