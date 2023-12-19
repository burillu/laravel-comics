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
    return view('comics.index', compact('comics'));
})->name('home');

Route::get('/characters', function () {
    $message = 'Hello Dc Comics';
    return view('characters', compact('message'));
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('comics');

// comic detail
Route::get('/comics/{index}', function ($index) {
    $comics = config('comics.comics');

    //controllo che non ci siano errori nel valore
    if ($index >= 0 && $index < count($comics)) {
        //prendo il comic con quell'indice
        $comic = $comics[$index];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comics.show');

Route::get('/movies', function () {
    $message = 'Hello Dc Comics';
    return view('movies', compact('message'));
})->name('movies');

Route::get('/tv', function () {
    $message = 'Hello Dc Comics';
    return view('tv', compact('message'));
})->name('tv');

Route::get('/games', function () {
    $message = 'Hello Dc Comics';
    return view('games', compact('message'));
})->name('games');

Route::get('/collectibles', function () {
    $message = 'Hello Dc Comics';
    return view('collectibles', compact('message'));
})->name('collectibles');

Route::get('/videos', function () {
    $message = 'Hello Dc Comics';
    return view('videos', compact('message'));
})->name('videos');

Route::get('/fans', function () {
    $message = 'Hello Dc Comics';
    return view('fans', compact('message'));
})->name('fans');

Route::get('/news', function () {
    $message = 'Hello Dc Comics';
    return view('news', compact('message'));
})->name('news');

Route::get('/shop', function () {
    $message = 'Hello Dc Comics';
    return view('shop', compact('message'));
})->name('shop');