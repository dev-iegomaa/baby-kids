<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'status'
    ];

    public function getIconAttribute($value): string
    {
        return 'images/activity/' . $value;
    }
}
