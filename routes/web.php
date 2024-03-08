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
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('characters', compact('title', 'links', 'navLinks'));
})->name('characters');

Route::get('/', function () {
    $title = 'Comics';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $comics = config('comics');
    $links = config('footerLinks');
    return view('comics', compact('title', 'comics', 'links', 'navLinks'));
})->name('comics');

Route::get('/movie', function () {
    $title = 'Movie';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('movie', compact('title', 'links', 'navLinks'));
})->name('movie');

Route::get('/tv', function () {
    $title = 'TV';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('TV', compact('title', 'links', 'navLinks'));
})->name('TV');

Route::get('/games', function () {
    $title = 'Games';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('games', compact('title', 'links', 'navLinks'));
})->name('games');

Route::get('/collectibles', function () {
    $title = 'Collectible';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('collectibles', compact('title', 'links', 'navLinks'));
})->name('collectibles');

Route::get('/videos', function () {
    $title = 'Videos';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('videos', compact('title', 'links', 'navLinks'));
})->name('videos');

Route::get('/fans', function () {
    $title = 'Fans';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('fans', compact('title', 'links', 'navLinks'));
})->name('fans');

Route::get('/news', function () {
    $title = 'News';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('news', compact('title', 'links', 'navLinks'));
})->name('news');

Route::get('/shop', function () {
    $title = 'Shop';
    $navLinks = ['characters', 'comics', 'movie', 'TV', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
    $links = config('footerLinks');
    return view('shop', compact('title', 'links', 'navLinks'));
})->name('shop');
