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
    $data = config('comics');
    return view('home', ['data' => $data]);
})->name('home');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];
    // dd($comic);

    return view('comics', ['data' => $comic]);
})->name('comics');
