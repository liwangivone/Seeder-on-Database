<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $journals = [
            ['title' => 'Nature Journal', 'author' => 'Various', 'publisher' => 'Nature Publishing Group', 'published_year' => 2023, 'stock' => 10],
            ['title' => 'Science Journal', 'author' => 'Various', 'publisher' => 'AAAS', 'published_year' => 2022, 'stock' => 9],
            ['title' => 'The Lancet', 'author' => 'Various', 'publisher' => 'Elsevier', 'published_year' => 2021, 'stock' => 8],
            ['title' => 'Cell', 'author' => 'Various', 'publisher' => 'Cell Press', 'published_year' => 2023, 'stock' => 7],
            ['title' => 'IEEE Transactions on Computers', 'author' => 'IEEE', 'publisher' => 'IEEE', 'published_year' => 2022, 'stock' => 5],
            ['title' => 'Journal of Machine Learning Research', 'author' => 'Various', 'publisher' => 'MIT Press', 'published_year' => 2020, 'stock' => 6],
            ['title' => 'PLOS ONE', 'author' => 'Various', 'publisher' => 'PLOS', 'published_year' => 2019, 'stock' => 12],
            ['title' => 'Physical Review Letters', 'author' => 'APS', 'publisher' => 'American Physical Society', 'published_year' => 2021, 'stock' => 10],
            ['title' => 'JAMA', 'author' => 'Various', 'publisher' => 'American Medical Association', 'published_year' => 2022, 'stock' => 11],
            ['title' => 'Economic Journal', 'author' => 'Various', 'publisher' => 'Royal Economic Society', 'published_year' => 2020, 'stock' => 4],
        ];

        foreach ($journals as $journal) {
            Journal::create($journal);
        }
    }
}
