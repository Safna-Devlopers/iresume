<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class services extends Model
{


    protected $dateFormat = 'U';

    protected $table = 'services';

    protected $fillable = [
        'title',
        'dec',
        'icon',
        'active',
        'created_at',
        'updated_at',
    ];
}
