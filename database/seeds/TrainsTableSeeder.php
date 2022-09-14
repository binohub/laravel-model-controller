<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains=[
            [
                "azienda" => "freccia rossa",
                "stazione_di_partenza" => "bologna",
                "codice_treno" => "ASOM4",
            ],
            [
                "azienda" => "freccia gialla",
                "stazione_di_partenza" => "fano",
                "codice_treno" => "A9JAD",
            ],
            [
                "azienda" => "freccia blu",
                "stazione_di_partenza" => "roma",
                "codice_treno" => "3DWN",
            ],
            [
                "azienda" => "freccia nera",
                "stazione_di_partenza" => "milano",
                "codice_treno" => "87ADB",
            ],
            [
                "azienda" => "freccia arancione",
                "stazione_di_partenza" => "ancona",
                "codice_treno" => "DJ3K",
            ],
            [
                "azienda" => "freccia bordeaux",
                "stazione_di_partenza" => "venezia",
                "codice_treno" => "INO3",
            ],
            [
                "azienda" => "freccia lilla",
                "stazione_di_partenza" => "roma",
                "codice_treno" => "98H3D",
            ],
            [
                "azienda" => "freccia grigia",
                "stazione_di_partenza" => "torino",
                "codice_treno" => "98H2U",
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train["azienda"];
            $newTrain->stazione_di_partenza = $train["stazione_di_partenza"];
            $newTrain->codice_treno = $train["codice_treno"];
            $newTrain->save();
        }

    }
}
