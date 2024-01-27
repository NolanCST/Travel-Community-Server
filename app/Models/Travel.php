<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    public $fillable = [
        'title', 
        'image',
        'user_id'
    ];

    public static function getAll() {
        return Travel::select('travels.*')
        ->leftjoin('travel_days', 'travels.id', '=', 'travel_days.travel_id')
        ->leftjoin('day_images', 'travel_days.id', '=', 'day_images.travel_day_id')
        ->with('legislations')
        ->groupBy('travels.id')
        ->get();
    }

    public function legislations() {
        return $this->belongsToMany(Legislation::class);
    }
}
