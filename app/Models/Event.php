<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'from',
        'to',
        'date',
        'location',
        'status'
    ];

    public function getImageAttribute($value): string
    {
        return 'images/event/' . $value;
    }
}
