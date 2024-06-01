<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahans extends Model
{
    use HasFactory;
    protected $table = 'kelurahans';

    protected $fillable = [
        'name',
        'deskripsi',
    ];
    public $timestamps = false; // Menonaktifkan created_at dan updated_at

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, 'nama_kelurahan', 'id');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($kelurahan) {
            $kelurahan->penduduk()->delete();
        });
    }
}
