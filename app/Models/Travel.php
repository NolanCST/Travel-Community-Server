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
        'days',
        'country',
        'user_id'
    ];

    protected $table = 'travels';

    public static function getAll() {
        return Travel::select('travels.*')->get();
    }

    public function legislations() {
        return $this->belongsToMany(Legislation::class, 'travel_legislation', 'travel_id', 'legislation_id');
    }
}
