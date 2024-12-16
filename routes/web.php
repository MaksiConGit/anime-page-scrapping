<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::resource('animes', AnimeController::class)->names('animes');
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('users', CategoryController::class)->names('users');
