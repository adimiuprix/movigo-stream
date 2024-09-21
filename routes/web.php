<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::get('/', [HomepageController::class, 'homepage'])->name('home');
Route::get('movies', [HomepageController::class, 'movies'])->name('movies');
