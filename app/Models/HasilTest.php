<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilTest extends Model
{
    use HasFactory;
    protected $table = 'hasil_test';

    protected $guarded = ['id'];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'penduduk_id', 'id');
    }

    public function test()
    {
        return $this->belongsTo(TestUjiKemampuan::class, 'test_uji_kemampuan_id', 'id');
    }


    public function details()
    {
        return $this->hasMany(HasilTestDetail::class, 'hasil_test_id', 'id');
    }

    public function rata_rata()
    {
        $total_nilai = $this->details()->sum('nilai');
        $jumlah = $this->details()->count();

        $rata_rata = $total_nilai / $jumlah;
        return number_format($rata_rata, 2);
    }
}
