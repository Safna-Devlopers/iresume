<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_slider extends Model
{
    use HasFactory;

    protected $dateFormat = 'U';

    protected $table = 'project_slider';

    protected $fillable = [
        'photo_url',
        'user_id',
        'project_id',
        'created_at',
        'updated_at',
    ];

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }
}
