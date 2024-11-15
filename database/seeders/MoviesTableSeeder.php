<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

public function run()
{
    DB::table('movies')->insert([
        [
            'release_year' => 2023,
            'movie_title' => 'AVATAR',
            'movie_description' => 'description movies',
            'number_in_stock' => 5,
            'rental_or_sale' => 'both',
            'rental_daily_rate' => 3.50,
        ],
        [
            'release_year' => 2022,
            'movie_title' => 'JUMANJI',
            'movie_description' => 'description movie about explore',
            'number_in_stock' => 3,
            'rental_or_sale' => 'rental',
            'rental_daily_rate' => 2.50,
        ],
    ]);
}

}
