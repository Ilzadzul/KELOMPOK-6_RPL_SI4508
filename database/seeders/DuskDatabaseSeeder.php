<?php

// database/seeders/DuskDatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Penduduk;
use App\Models\Kelurahans;
use Illuminate\Support\Facades\Hash;

class DuskDatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'salmatest',
            'fullname' => 'salmatest',
            'user_type' => 'Super Admin',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'username' => 'salmaatest',
            'fullname' => 'salmaatest',
            'user_type' => 'Admin',
            'password' => Hash::make('password123'),
        ]);

        Kelurahans::create([
            'name' => 'Kelurahan A',
            'deskripsi' => 'Kelurahan A merupakan kelurahan yang berada di A.',
        ]);

        Kelurahans::create([
            'name' => 'Kelurahan B',
            'deskripsi' => 'Kelurahan B merupakan kelurahan yang berada di mana weh.',
        ]);

        Penduduk::create([
            'namalengkap' => 'nama lengkap test',
            'TTL' => 'TTL test',
            'gender' => 'Wanita',
            'agama' => 'Islam',
            'alamat' => 'Alamat test',
            'nama_kelurahan' => 'Kelurahan A',
            'phonenumber' => '081315170575',
            'email' => 'test@gmail.com',
            'No_ktp' => '1234567890123450',

            'pendidikan' => 'Tidak ada',
            'institusi' => '',
            'jurusan'=> '',
            'tahunmasuk' => '',
            'tahunlulus'=> '',

            'pengalaman'=> '',
            'bidang'=> '',
            'tahun'=> '',
            'posisi' => '',
        ]);

        Penduduk::create([
            'namalengkap' => 'nama lengkap search',
            'TTL' => 'TTL search',
            'gender' => 'Wanita',
            'agama' => 'Islam',
            'alamat' => 'Alamat search',
            'nama_kelurahan' => 'Kelurahan A',
            'phonenumber' => '081315170579',
            'email' => 'search@gmail.com',
            'No_ktp' => '1234567890123470',

            'pendidikan' => 'Tidak ada',
            'institusi' => '',
            'jurusan'=> '',
            'tahunmasuk' => '',
            'tahunlulus'=> '',

            'pengalaman'=> '',
            'bidang'=> '',
            'tahun'=> '',
            'posisi' => '',
        ]);

        Penduduk::create([
            'namalengkap' => 'nama lengkap search',
            'TTL' => 'TTL search',
            'gender' => 'Wanita',
            'agama' => 'Islam',
            'alamat' => 'Alamat search',
            'nama_kelurahan' => 'Kelurahan B',
            'phonenumber' => '081315170579',
            'email' => 'search@gmail.com',
            'No_ktp' => '1234567890123470',

            'pendidikan' => 'Tidak ada',
            'institusi' => '',
            'jurusan'=> '',
            'tahunmasuk' => '',
            'tahunlulus'=> '',

            'pengalaman'=> '',
            'bidang'=> '',
            'tahun'=> '',
            'posisi' => '',
        ]);
    }
}
