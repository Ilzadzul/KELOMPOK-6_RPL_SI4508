<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUjiKemampuan extends Model
{
    protected $table = 'test_uji_kemampuan'; 

    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'durasi']; 

}
