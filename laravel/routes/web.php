<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('table');
});
Route::get('/dashboard', function () {
    return view('table');
});
Route::get('/top_movies', function () {
    return view('top5');
});

Route::get('import_casts', 'App\Http\Controllers\CastController@store');
Route::get('import_movies', 'App\Http\Controllers\MovieController@store');
