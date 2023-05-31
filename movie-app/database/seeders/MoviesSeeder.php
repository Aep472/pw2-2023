<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'Pinochio',
            'poster' => 'Pino.jpg',
            'genre_id' => '1',
            'negara' => 'USA',
            'tahun' => 2000,
            'rating' => 9.8,
        ]);

        Movie::create([
            'judul' => 'Iam not a robot',
            'poster' => 'image.jpg',
            'genre_id' => '3',
            'negara' => 'Korea Selatan',
            'tahun' => 2022,
            'rating' => 8.0,
        ]);


        Movie::create([
            'judul' => 'The litle Mermaid',
            'poster' => 'image.png',
            'genre_id' => '3',
            'negara' => 'USA',
            'tahun' => 2023,
            'rating' => 9.0,
        ]);


    }
}
