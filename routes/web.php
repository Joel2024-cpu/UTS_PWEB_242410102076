<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman utama
Route::get('/', [PageController::class, 'home'])->name('home');

// Halaman login
Route::get('/login', [PageController::class, 'login'])->name('login');

// Proses login dan dashboard - GUNAKAN POST UNTUK LOGIN
Route::post('/dashboard', [PageController::class, 'authenticate'])->name('dashboard.post');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Profil dan Pengelolaan - TAMBAHKAN PARAMETER UNTUK PROFILE
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
