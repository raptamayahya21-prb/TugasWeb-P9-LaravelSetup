<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes - Tugas Rutin 9 & Praktikum Filament
|--------------------------------------------------------------------------
*/

// 3 Rute Custom yang Mengembalikan Blade View dengan Data Dinamis (Requirement 4 & 5)
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// BONUS: Route Parameter /hello/{nama}
Route::get('/hello/{nama}', [PageController::class, 'greeting'])->name('greeting');

// Welcome page bawaan Laravel (untuk kemudahan screenshot Requirement 3)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
