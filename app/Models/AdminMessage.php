<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminMessage extends Model

{
    use HasFactory;

    protected $fillable = ['user', 'message'];
}