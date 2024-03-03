<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legislation extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'rules'
    ];

    public static function getAll() {
        return Legislation::select('legislations.country')->get();
    }
}
