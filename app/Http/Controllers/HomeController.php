<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

// Movie si collega direttamente senza che io faccia nulla, dopo aver configurato .env




class HomeController extends Controller
{
    //
    public function index(){
        // $movies = Movie::all();
        // $firstMovie = Movie::first();
        // $findMovie = Movie::findOrFail(10);
        // $whereMovie = Movie::where('nationality', 'LIKE', "%n")->get(); // con il where è necessario ->get()
        // $selectwhereMovie = Movie::where('title', 'LIKE', "%a%")->limit(5)->orderBy('title')->get(); //limità al massimo a 2 risultati, i  
        // di base si aspetta che la tabella abbia il timestamp; in questo caso possiamo risolvere il nostro problema con (public $timestamps = false;) sul metodo
        // $newMovie = new Movie();
        // $newMovie->title = 'Spiderman';
        // $newMovie->original_title = 'Spiderman No Way Home';
        // $newMovie->nationality = 'American';
        // $newMovie->date = '2022/08/26';
        // $newMovie->vote = '9.8'; 
        // $newMovie->save();
        return view('home.index');
    }
    public function contacts(){
        return view('home.contacts');
    }

}
 