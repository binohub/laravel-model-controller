<?php

use App\Director;
use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder

// $table->string("name", 25);
// $table->string("surname", 25);
// $table->smallInteger("age")->unsigned();
{
    /**
     * $variabile
     * "column" => 'complete',
     * 
     * 
     * @return void
     */
    public function run()
    {
        $directors = [
            [
                "name"=>'luca',
                "surname"=>'rosari',
                "age"=>'43'
            ],
            [
                "name"=>'yang',
                "surname"=>'montanari',
                "age"=>'26'
            ],
            [
                "name"=>'rosario',
                "surname"=>'falce',
                "age"=>'24'
            ],
            [
                "name"=>'cemento',
                "surname"=>'armato',
                "age"=>'43'
            ],
        ];

        foreach ($directors as $director) {
            $newDirector = new Director();
            $newDirector->name = $director["name"];
            $newDirector->surname = $director["surname"];
            $newDirector->age = $director["age"];
            $newDirector->save();
        }
    }
}
 