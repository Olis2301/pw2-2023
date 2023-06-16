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
            'judul' => 'The warriosr',
            'poster' => '1.png',
            'genre_id' => 1,
            'negara' => 'UAS',
            'tahun' => '1990',
            'rating' => '9.1'
       ]);

       Movie::create([
        'judul' => 'DOTS',
        'poster' => 'image.png',
        'genre_id' => 3,
        'negara' => 'Korea Selatan',
        'tahun' => '2016',
        'rating' => '10'
   ]);
    }
}
