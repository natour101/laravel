<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'teacher',
        'price',
        'image',
        'is_trending',
        'is_popular',
    ];
}
