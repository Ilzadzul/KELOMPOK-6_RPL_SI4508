<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUjiKemampuan extends Model
{
    protected $table = 'test_uji_kemampuan'; // Nama tabel dalam database

    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'durasi']; // Kolom yang dapat diisi

 
}
