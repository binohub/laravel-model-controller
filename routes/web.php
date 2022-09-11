<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|route mi connette la rotta ad una view 
    Route::get('/', function () {
        return view('welcome');
    });
|tuttavia voglio che a gestire ciò sia il controller (il nome del controller deve essere singolare)
    Route::get('/', "NomeDelController@MetodoController")->name("nome");
|"a questo punto abbiamo collegato le due cose e ciò che stiamo dicendo è vai su NomeDelController e recupera questa informazione (MetodoController)"
|
|
*/
 

Route::get('/home', "HomeController@index")->name('homepage');
Route::get('/contacts', "HomeController@contacts")->name('contacts');
Route::get('/movies', "MovieController@index")->name('movies');
