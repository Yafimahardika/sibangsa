<?php

use App\Http\Controllers\NasabahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JenisSampahController;
 use App\Http\Controllers\SetoranController;
use App\Http\Controllers\PenarikanController;


use Illuminate\Support\Facades\Route;

// =============================================================
Route::get('/', function () {
    return view('home'); });
Route::get('/tentang', function () {
    return view('about'); });
Route::get('/kontak', function () {
    return view('kontak'); });

// Route::get('/', function () {
//     return view('welcome');
// });
// =============================================================

// =============================================================
Route::get('/nasabah', [NasabahController::class, 'index']);

Route::get('/nasabah/tambah', [NasabahController::class, 'tambah'])->name('nasabah.tambah');

Route::post('/nasabah/store', [NasabahController::class, 'store'])->name('nasabah.store');
// =============================================================

// =============================================================
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');
// =============================================================

// =============================================================
Route::middleware('auth')->group(function () {
// =============================================================

// =============================================================
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// =============================================================

// =============================================================
Route::resource('nasabah', NasabahController::class);
// =============================================================

// =============================================================
Route::resource('jenis-sampah', JenisSampahController::class);
// =============================================================

// =============================================================
Route::resource('setoran', SetoranController::class);
// =============================================================

// =============================================================
Route::resource('penarikan', PenarikanController::class);
// =============================================================
});

require __DIR__.'/auth.php';
