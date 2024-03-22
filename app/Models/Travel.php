<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'description',
        'image',
        'alt',
        'days',
        'country',
        'user_id'
    ];

    protected $table = 'travels';

    public static function getAll() {
        return Travel::select('travels.*')
        ->with('legislations')
        ->leftjoin('rates', 'travels.id', '=', 'rates.travel_id')
        ->selectRaw('travels.*, COUNT(rates.id) as total_rates, ROUND(AVG(rates.rate), 1) as average_rating')
        ->groupBy('travels.id')
        ->get();
    }

    public function legislations() {
        return $this->belongsToMany(Legislation::class, 'travel_legislation', 'travel_id', 'legislation_id');
    }
}
