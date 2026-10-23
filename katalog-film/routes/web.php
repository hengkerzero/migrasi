<?php
use App\Http\Controllers\FilmController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function () {
    return ('Sendy Ferry Setyawan');
});

Route::get('/nim', function () {
    return ('5250411218');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/tentang-kami', [DashboardController::class, 'tentang'])->name('tentang-kami');

Route::get('/harga', [DashboardController::class, 'harga'])->name('harga');

// Route Untuk Menampilkan daftar film
Route::get('/films', [FilmController::class, 'index'])->name('films');
