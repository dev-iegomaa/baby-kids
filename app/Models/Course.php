<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'status'
    ];

    public function getImageAttribute($value): string
    {
        return 'images/course/' . $value;
    }
}
