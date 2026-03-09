<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{

public function run()
{
    Author::create([
        'name' => 'J.K. Rowling',
        'email' => 'jkrowling@example.com',
        'bio' => 'Author of Harry Potter'
    ]);

    Author::create([
        'name' => 'George R.R. Martin',
        'email' => 'grrm@example.com',
        'bio' => 'Author of Game of Thrones'
    ]);

    Author::create([
        'name' => 'Dan Brown',
        'email' => 'danbrown@example.com',
        'bio' => 'Author of The Da Vinci Code'
    ]);

    Author::create([
        'name' => 'Agatha Christie',
        'email' => 'agatha@example.com',
        'bio' => 'Queen of Mystery Novels'
    ]);
}
}
