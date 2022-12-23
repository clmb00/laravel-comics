<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics_list = config('db.comics');
    return view('comics', compact('comics_list'));
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// questo se il parametro è opzionale
// Route:get('/info_comic/{id?}', function($id = null){})
// altirmenti se non passo il parametro mi da un 404
Route::get('/info_comic/{id}', function ($id) {

    $comics_list = config('db.comics');
    $comic_get = array_filter($comics_list, fn($item) => $item['id'] == $id);
    $comic_info = $comic_get[array_key_first($comic_get)];

    return view('info_comic', compact('comic_info'));
})->name('info');
