<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\ChapterController;

// Public routes
Route::get('/', [MangaController::class, 'index'])->name('home');
Route::get('/manga/{manga}', [MangaController::class, 'show'])->name('manga.show');
Route::get('/chapter/{chapter}/{page?}', [ChapterController::class, 'read'])->name('chapter.read');

// Authenticated routes
Route::middleware([
    'auth', // Ubah dari 'auth:sanctum' ke 'auth' biasa untuk web session
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Tambahkan route lain yang membutuhkan auth di sini
});