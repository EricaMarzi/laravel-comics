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

Route::get('/characters', function () {
    $title = 'Characters';
    return view('characters', compact('title'));
})->name('char');

Route::get('/', function () {
    $title = 'Comics';
    return view('comics', compact('title'));
})->name('comics');

Route::get('/movie', function () {
    $title = 'Movie';
    return view('movie', compact('title'));
})->name('movie');

Route::get('/tv', function () {
    $title = 'TV';
    return view('TV', compact('title'));
})->name('TV');

Route::get('/games', function () {
    $title = 'Games';
    return view('games', compact('title'));
})->name('games');

Route::get('/collectibles', function () {
    $title = 'Collectible';
    return view('collectibles', compact('title'));
})->name('collectibles');

Route::get('/videos', function () {
    $title = 'Videos';
    return view('videos', compact('title'));
})->name('videos');

Route::get('/fans', function () {
    $title = 'Fans';
    return view('fans', compact('title'));
})->name('fans');

Route::get('/news', function () {
    $title = 'News';
    return view('news', compact('title'));
})->name('news');

Route::get('/shop', function () {
    $title = 'Shop';
    return view('shop', compact('title'));
})->name('shop');
