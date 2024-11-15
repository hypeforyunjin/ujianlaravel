<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $primaryKey = 'movie_id';

    protected $fillable = [
        'release_year',
        'movie_title',
        'movie_description',
        'number_in_stock',
        'rental_or_sale',
        'rental_daily_rate',
    ];
}
