<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $books = [
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'publisher' => 'J.B. Lippincott & Co.', 'published_year' => 1960, 'stock' => 10],
            ['title' => '1984', 'author' => 'George Orwell', 'publisher' => 'Secker & Warburg', 'published_year' => 1949, 'stock' => 15],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'publisher' => 'T. Egerton', 'published_year' => 1813, 'stock' => 20],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'publisher' => 'Scribner', 'published_year' => 1925, 'stock' => 12],
            ['title' => 'Moby-Dick', 'author' => 'Herman Melville', 'publisher' => 'Harper & Brothers', 'published_year' => 1851, 'stock' => 8],
            ['title' => 'War and Peace', 'author' => 'Leo Tolstoy', 'publisher' => 'The Russian Messenger', 'published_year' => 1869, 'stock' => 5],
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'publisher' => 'Little, Brown and Company', 'published_year' => 1951, 'stock' => 7],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'publisher' => 'George Allen & Unwin', 'published_year' => 1937, 'stock' => 10],
            ['title' => 'Ulysses', 'author' => 'James Joyce', 'publisher' => 'Shakespeare and Company', 'published_year' => 1922, 'stock' => 4],
            ['title' => 'Don Quixote', 'author' => 'Miguel de Cervantes', 'publisher' => 'Francisco de Robles', 'published_year' => 1605, 'stock' => 6],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
