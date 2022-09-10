<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

// Movie si collega direttamente senza che io faccia nulla, dopo aver configurato .env




class HomeController extends Controller
{
    //
    public function GiovanniMucciaccia(){
        // $movies = Movie::all();
        // $firstMovie = Movie::first();
        // $findMovie = Movie::findOrFail(10);
        // $whereMovie = Movie::where('nationality', 'LIKE', "%n")->get(); // con il where è necessario ->get()
        $selectwhereMovie = Movie::w here('title', 'LIKE', "%a%")->limit(5)->orderBy('title')->get(); //limità al massimo a 2 risultati, i primi due
        dd($selectwhereMovie); 
        $title =  'Benvenute e Benvenuti!!';
        return view('home', compact('title', 'movies'));
    }
}
 