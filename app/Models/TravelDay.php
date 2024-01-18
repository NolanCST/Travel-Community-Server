<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_day',
        'description_day',
        'travel_id'
    ];
}
