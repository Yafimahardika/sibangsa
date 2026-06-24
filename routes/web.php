<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JenisSampahController;
use App\Http\Controllers\SetoranController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\LaporanController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| HALAMAN UMUM
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('about');
})->name('about');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

/*
|--------------------------------------------------------------------------
| DASHBOARD (LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| ROUTE SETELAH LOGIN
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | MANAJEMEN
    |--------------------------------------------------------------------------
    */

    Route::prefix('manajemen')->group(function (){
        Route::resource('nasabah', NasabahController::class);
        Route::resource('jenis-sampah', JenisSampahController::class);
        Route::resource('user', UserController::class);
        // Route untuk show form
        Route::get('user/{id}/reset-password', [UserController::class, 'showResetForm'])->name('user.showResetForm');
        // Route untuk reset password
        Route::post('user/{id}/reset-password', [UserController::class, 'resetPassword'])->name('user.resetPassword');
        // Route untuk aktfikan user
        Route::post('user/{id}/activate', [UserController::class, 'activate'])->name('user.activate');
    });

    /*
    |--------------------------------------------------------------------------
    | TRANSAKSI
    |--------------------------------------------------------------------------
    */

    Route::prefix('transaksi')->group(function () {
        Route::resource('setoran', SetoranController::class);
        Route::resource('penarikan', PenarikanController::class);
    });

    /*
    |--------------------------------------------------------------------------
    | STATISTIK
    |--------------------------------------------------------------------------
    */

    Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik.index');

    /*
    |--------------------------------------------------------------------------
    | LAPORAN
    |--------------------------------------------------------------------------
    */

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
});

    // Route Layanan //
    Route::get('/layanan', function ()
    { return view('layanan'); });

require __DIR__.'/auth.php';
