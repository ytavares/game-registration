<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/jogos', function () {
//     return "Yuri Tavares estudando Laravel";
// });

// Route::view('/jogos', 'jogos', ['name' => 'GTA']);

Route::get('/jogos/{name?}/{id?}', function($name = null, $id = null) {
    return view('jogos', ['nomeJogo' => $name, 'idJogo' => $id]);
})->where('id', '[0-9]+' and 'name', '[A-Za-z]+');
