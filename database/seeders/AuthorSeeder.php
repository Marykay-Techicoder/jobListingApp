<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'first_name' => 'John',
            'description' => 'John Doe is a famous author',
        ]);
        Author::create([
            'first_name' => 'Jane',
            'description' => 'Jane Doe is a famous author',
        ]);
    }
}
