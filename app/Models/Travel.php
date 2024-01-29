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

    protected $table = 'travels';

    public static function getAll() {
        return Travel::select('travels.*')
        ->leftJoin('travel_days', 'travels.id', '=', 'travel_days.travel_id')
        ->leftJoin('day_images', 'travel_days.id', '=', 'day_images.travel_day_id')
        ->selectRaw('GROUP_CONCAT(DISTINCT travel_days.id) as day_ids')
        ->selectRaw('GROUP_CONCAT(DISTINCT travel_days.title_day) as day_titles')
        ->selectRaw('GROUP_CONCAT(DISTINCT travel_days.description_day) as day_descriptions')
        ->selectRaw('GROUP_CONCAT(DISTINCT day_images.id) as image_ids')
        ->selectRaw('GROUP_CONCAT(DISTINCT day_images.image) as day_images')
        ->selectRaw('GROUP_CONCAT(DISTINCT day_images.alt) as day_image_alts')
        ->groupBy('travels.id')
        ->get();
    }

    public function legislations() {
        return $this->belongsToMany(Legislation::class, 'travel_legislation', 'travel_id', 'legislation_id');
    }
}
