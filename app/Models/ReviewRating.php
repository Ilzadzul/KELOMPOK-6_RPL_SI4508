<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewFeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'comment',
        'star_rating',
        'user_id',
        'service_id',
    ];

    // Jika nama tabel tidak sesuai dengan konvensi Laravel, Anda dapat menentukannya di sini
    protected $table = 'nama_tabel_anda';
}
