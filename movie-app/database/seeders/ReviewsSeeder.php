<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Batman',
            'user_id' => 'jeffrey wright',
            'rating' => 9.0,
            'review' => 'Ketika seorang pembunuh berantai yang sadis mulai membunuh tokoh politik penting di gotham
            ,Batman terpaksa menyelidiki korupsi ....',
            'tanggal' => '02-02-2022',
        ]);

        Review::create([
            'film' => 'Everything Everywhere All at Once',
            'user_id' => 'Ke huy quan',
            'rating' => 9.6,
            'review' => 'Seorang imigran tiongkok yang sudah lanjut usia tersapu dalam petualangan gila
            ,dimana dia sendiri yang dapat selamatkan dunia',
            'tanggal' => '22-06-2022',
        ]);
        Review::create([
            'film' => 'Thirteen Lives',
            'user_id' => 'Tom Bateman',
            'rating' => 7.8,
            'review' => 'Sebuah misi penyelamatan disusun di Thailand  dimana  sekelompok anak laki laki dan pelatih
            sepak bola merekaterjebak di dalam gua bawah tanah',
            'tanggal' => '29-06-2022',
        ]);
    }
}
