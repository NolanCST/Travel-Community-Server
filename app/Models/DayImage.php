<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'travel_day_id'
    ];
}
