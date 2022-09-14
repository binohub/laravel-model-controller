<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $movies = [
            [
                'title' => 'spiderman',
            ],
            [
                'title' => 'ironman',
            ],
            [
                'title' => 'avengers',
            ],
            [
                'title' => 'supergirl',
            ],
            [
                'title' => 'superman',
            ],
            [
                'title' => 'loki',
            ],
            [
                'title' => 'thor',
            ],
            [
                'title' => 'hulk',
            ],
        ];

        foreach ($movies as $movie) {
            $newMovie = new Movie();
            $newMovie->title = $movie['title'];
            $newMovie->save();
        }
    }
}
