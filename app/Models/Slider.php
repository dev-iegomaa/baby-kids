<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image',
        'status'
    ];

    public function getImageAttribute($value): string
    {
        return 'images/slider/' . $value;
    }
}
