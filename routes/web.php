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
    Route::get('/', "NomeDelController@MetodoController");
|"a questo punto abbiamo collegato le due cose e ciò che stiamo dicendo è vai su NomeDelController e recupera questa informazione (MetodoController)"
|
|
*/
 
Route::get('/', "MovieController@index");
Route::get('/home', "HomeController@index");
Route::get('/contacts', "HomeController@contacts");
