<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUjiKemampuanDetail extends Model
{
    use HasFactory;
    protected $table = 'test_uji_kemampuan_detail';
    protected $guarded = ['id'];

    public function test_uji_kemampuan()
    {
        return $this->belongsTo(TestUjiKemampuan::class, 'test_uji_kemampuan_id', 'id');
    }
}
