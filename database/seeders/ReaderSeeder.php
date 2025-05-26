<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author1 = Author::where('first_name', 'John')->first();
        $author2 = Author::where('first_name', 'Jane')->first();

        $author1->readers()->create([
            'title' => 'Book 1',
            'genre' => 'Fiction',
            'published_year' => 2020,
        ]);

        $author2->readers()->create([
            'title' => 'Book 4',
            'genre' => 'Non-Fiction',
            'published_year' => 2023,
        ]);
    }
}