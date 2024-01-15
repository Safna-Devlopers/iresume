<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{

    protected $dateFormat = 'U';

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'dec',
        'finish_date',
        'user_id_create',
        'customer',
        'active',
        'created_at',
        'updated_at',
    ];

    public function slider()
    {
        return $this->hasMany(project_slider::class, 'project_id');
    }
}
