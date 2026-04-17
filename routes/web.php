<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;


Route::get('/', function () {
    return view('home');
})->name('home.index');


Route::get('/produk', function () {
    return view('produk.index');
})->name('produk.index');

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak.index');


Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil.index');

Route::get('/profil/{nim}', [ProfilController::class, 'show'])
    ->name('profil.show');

Route::get('/katalog', [KatalogController::class, 'index'])
    ->name('katalog.index');

Route::get('/katalog/{id}', [KatalogController::class, 'show'])
    ->name('katalog.show');