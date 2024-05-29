<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('index');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('show');

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/search', [SearchController::class, 'index'])->name('search');
