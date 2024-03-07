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
    $links = config('footer.links');
    return view('characters', compact('title', 'links'));
})->name('char');

Route::get('/', function () {
    $title = 'Comics';
    $comics = config('comics');
    $links = config('footerLinks');
    return view('comics', compact('title', 'comics', 'links'));
})->name('comics');

Route::get('/movie', function () {
    $title = 'Movie';
    $links = config('footerLinks');
    return view('movie', compact('title', 'links'));
})->name('movie');

Route::get('/tv', function () {
    $title = 'TV';
    $links = config('footerLinks');
    return view('TV', compact('title', 'links'));
})->name('TV');

Route::get('/games', function () {
    $title = 'Games';
    $links = config('footerLinks');
    return view('games', compact('title', 'links'));
})->name('games');

Route::get('/collectibles', function () {
    $title = 'Collectible';
    $links = config('footerLinks');
    return view('collectibles', compact('title', 'links'));
})->name('collectibles');

Route::get('/videos', function () {
    $title = 'Videos';
    $links = config('footerLinks');
    return view('videos', compact('title', 'links'));
})->name('videos');

Route::get('/fans', function () {
    $title = 'Fans';
    $links = config('footerLinks');
    return view('fans', compact('title', 'links'));
})->name('fans');

Route::get('/news', function () {
    $title = 'News';
    $links = config('footerLinks');
    return view('news', compact('title', 'links'));
})->name('news');

Route::get('/shop', function () {
    $title = 'Shop';
    $links = config('footerLinks');
    return view('shop', compact('title', 'links'));
})->name('shop');
