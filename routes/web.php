<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics_list = include_once '../resources/data/comics.php';
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

Route::get('/info_comic', function () {
    return view('info_comic');
})->name('info');
