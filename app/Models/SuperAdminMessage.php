<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAdminMessage extends Model
{
    use HasFactory;

    protected $table = 'superadmin_messages';

    protected $fillable = ['message', 'user'];
}


