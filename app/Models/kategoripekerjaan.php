<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'kategori_pekerjaan'; // Sesuaikan dengan nama tabel pada database jika berbeda

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];
}
