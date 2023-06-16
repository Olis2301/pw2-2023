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
            'film' => 'kasih cinta',
            'user' => 'murayaa',
            'rating' => '8.4',
            'review' => 'Filmnya sangat bagus dan keren',
            'tahun' => '2022',

        ]);

        Review::create([
            'film' => 'the sims',
            'user' => 'sims',
            'rating' => '8.9',
            'review' => 'wahhhh keren',
            'tahun' => '2012',

        ]);

        Review::create([
            'film' => 'Miracle no incke',
            'user' => 'bapak dodo',
            'rating' => '9',
            'review' => 'sedih',
            'tahun' => '2021',

        ]);

        Review::create([
            'film' => 'Be with You',
            'user' => 'Lee Jang-hoon',
            'rating' => '8.5',
            'review' => 'Dramanya bagus',
            'tahun' => '2018',

        ]);

        Review::create([
            'film' => '20th Century Girl',
            'user' => 'Bang Woo-ri',
            'rating' => '9.3',
            'review' => 'seru',
            'tahun' => '2022',

        ]);
    }
}
