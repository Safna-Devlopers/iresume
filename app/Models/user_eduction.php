<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_eduction extends Model
{
    use HasFactory;

    protected $table = 'user_eductions';
    protected $fillable = [
        'title',
        'uni_title',
        'dec',
        'time',
        'created_at',
        'updated_at',
    ];
}
