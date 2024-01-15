<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_works extends Model
{
    use HasFactory;

    protected $table = 'user_works';
    protected $fillable = [
        'title',
        'work_title',
        'dec',
        'time',
        'created_at',
        'updated_at',
    ];
}
