<?php

namespace Database\Seeders;

use App\Models\FYP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FYPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $fyps = [
            ['title' => 'AI in Healthcare', 'author' => 'John Doe', 'advisor' => 'Dr. Smith', 'published_year' => 2023, 'stock' => 5],
            ['title' => 'Blockchain for Finance', 'author' => 'Jane Smith', 'advisor' => 'Dr. Johnson', 'published_year' => 2022, 'stock' => 6],
            ['title' => 'IoT in Smart Cities', 'author' => 'Emily Davis', 'advisor' => 'Dr. Brown', 'published_year' => 2021, 'stock' => 4],
            ['title' => 'Machine Learning in Education', 'author' => 'Michael Brown', 'advisor' => 'Dr. Lee', 'published_year' => 2020, 'stock' => 3],
            ['title' => 'Cloud Computing Security', 'author' => 'Sarah White', 'advisor' => 'Dr. Taylor', 'published_year' => 2023, 'stock' => 2],
            ['title' => 'Data Science in Marketing', 'author' => 'David Wilson', 'advisor' => 'Dr. Harris', 'published_year' => 2021, 'stock' => 6],
            ['title' => 'Sustainable Energy Solutions', 'author' => 'Jessica Johnson', 'advisor' => 'Dr. Hall', 'published_year' => 2022, 'stock' => 4],
            ['title' => 'Quantum Computing', 'author' => 'Robert Clark', 'advisor' => 'Dr. Allen', 'published_year' => 2023, 'stock' => 5],
            ['title' => 'Autonomous Vehicles', 'author' => 'Laura Lewis', 'advisor' => 'Dr. Young', 'published_year' => 2022, 'stock' => 3],
            ['title' => 'Cybersecurity in IoT', 'author' => 'Kevin Martinez', 'advisor' => 'Dr. Walker', 'published_year' => 2021, 'stock' => 4],
        ];

        foreach ($fyps as $fyp) {
            FYP::create($fyp);
        }
    }
}
