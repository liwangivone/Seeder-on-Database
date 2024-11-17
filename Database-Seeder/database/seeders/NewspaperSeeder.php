<?php

namespace Database\Seeders;

use App\Models\Newspaper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewspaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $newspapers = [
            ['title' => 'The New York Times', 'publisher' => 'The New York Times Company', 'published_year' => 2023, 'stock' => 20],
            ['title' => 'The Washington Post', 'publisher' => 'Nash Holdings', 'published_year' => 2022, 'stock' => 18],
            ['title' => 'The Guardian', 'publisher' => 'Guardian Media Group', 'published_year' => 2021, 'stock' => 15],
            ['title' => 'The Times', 'publisher' => 'News UK', 'published_year' => 2020, 'stock' => 12],
            ['title' => 'The Wall Street Journal', 'publisher' => 'Dow Jones & Company', 'published_year' => 2023, 'stock' => 10],
            ['title' => 'The Daily Telegraph', 'publisher' => 'Telegraph Media Group', 'published_year' => 2019, 'stock' => 8],
            ['title' => 'Los Angeles Times', 'publisher' => 'Nant Capital', 'published_year' => 2020, 'stock' => 14],
            ['title' => 'Chicago Tribune', 'publisher' => 'Tribune Publishing', 'published_year' => 2018, 'stock' => 10],
            ['title' => 'USA Today', 'publisher' => 'Gannett Company', 'published_year' => 2021, 'stock' => 16],
            ['title' => 'Financial Times', 'publisher' => 'Nikkei Inc.', 'published_year' => 2022, 'stock' => 9],
        ];

        foreach ($newspapers as $newspaper) {
            Newspaper::create($newspaper);
        }
    }
}
