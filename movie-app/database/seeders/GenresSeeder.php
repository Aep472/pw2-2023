<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Romance',
            'desk' => 'About Love and sacrifice',
        ]);

        Genre::create([
            'nama' => 'Horror',
            'desk' => 'a truly terrifying nightmare ',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'desk' => 'based on true event',
        ]);
    }
}
