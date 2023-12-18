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
    $comics = config('comics.comics');
    //dd($comics);
    return view('home', compact('comics'));
})->name('home');

Route::get('/characters', function () {
    $message = 'Hello Dc Comics';
    return view('characters', compact('message'));
})->name('characters');
