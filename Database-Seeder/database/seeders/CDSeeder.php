<?php

namespace Database\Seeders;

use App\Models\CD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cds = [
            ['title' => 'Thriller', 'artist' => 'Michael Jackson', 'published_year' => 1982, 'stock' => 12],
            ['title' => 'Back in Black', 'artist' => 'AC/DC', 'published_year' => 1980, 'stock' => 10],
            ['title' => 'Dark Side of the Moon', 'artist' => 'Pink Floyd', 'published_year' => 1973, 'stock' => 8],
            ['title' => 'Rumours', 'artist' => 'Fleetwood Mac', 'published_year' => 1977, 'stock' => 7],
            ['title' => 'The Wall', 'artist' => 'Pink Floyd', 'published_year' => 1979, 'stock' => 6],
            ['title' => 'Hotel California', 'artist' => 'Eagles', 'published_year' => 1976, 'stock' => 9],
            ['title' => 'Abbey Road', 'artist' => 'The Beatles', 'published_year' => 1969, 'stock' => 5],
            ['title' => 'Born in the U.S.A.', 'artist' => 'Bruce Springsteen', 'published_year' => 1984, 'stock' => 10],
            ['title' => 'Led Zeppelin IV', 'artist' => 'Led Zeppelin', 'published_year' => 1971, 'stock' => 8],
            ['title' => 'Purple Rain', 'artist' => 'Prince', 'published_year' => 1984, 'stock' => 6],
        ];

        foreach ($cds as $cd) {
            CD::create($cd);
        }
    }
}
