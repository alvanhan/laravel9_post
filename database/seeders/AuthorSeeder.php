<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            ['name' => 'Budi Santoso'],
            ['name' => 'Rina Kusuma'],
            ['name' => 'Hiroshi Tanaka'],
            ['name' => 'Yuki Nakamura'],
            ['name' => 'Siti Aisyah'],
            ['name' => 'Akira Yamamoto'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
