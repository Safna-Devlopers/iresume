<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static pluck(string $string, string $string1)
 */
class Configs extends Model
{
    protected $dateFormat = 'U';

    protected $table = 'configs';


}
