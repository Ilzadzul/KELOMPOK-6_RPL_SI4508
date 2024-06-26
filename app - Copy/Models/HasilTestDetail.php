<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilTestDetail extends Model
{
    use HasFactory;
    protected $table = 'hasil_test_detail';

    protected $guarded = ['id'];


    public function hasil_test()
    {
        return $this->belongsTo(HasilTest::class, 'hasil_test_id', 'id');
    }

    public function test_detail()
    {
        return $this->belongsTo(TestUjiKemampuanDetail::class, 'test_detail_id', 'id');
    }
}
