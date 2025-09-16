<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'specialization',
        'status'
    ];

    public function getImageAttribute($value): string
    {
        return 'images/teacher/' . $value;
    }
}
