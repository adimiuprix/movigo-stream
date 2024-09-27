<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::get('/', [HomepageController::class, 'homepage'])->name('home');
Route::get('movies', [HomepageController::class, 'movies'])->name('movies');
Route::get('movies/play/', [HomepageController::class, 'movplay'])->name('movplay');

Route::get('about', [HomepageController::class, 'about'])->name('about');
Route::get('faq', [HomepageController::class, 'faq'])->name('faq');
Route::get('contact', [HomepageController::class, 'contact'])->name('contact');
