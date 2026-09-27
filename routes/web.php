<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Tugas Rutin 9: Setup Laravel
|--------------------------------------------------------------------------
*/

// Kriteria 4: Rute utama / mengembalikan Blade view welcome
Route::get('/', function () {
    return view('welcome');
});

// Kriteria 4 & 5: Rute /about mengembalikan Blade view dengan data dinamis random x
Route::get('/about', function () {
    return view('about', [
        'x' => random_int(1, 10)
    ]);
});

// Kriteria 4 & 5: Rute /contact mengembalikan Blade view dengan data dinamis array identitas
Route::get('/contact', function () {
    return view('contact', [
        'data' => [
            'name'    => 'Rapta Mayahya',
            'class'   => 'Praktikum Web - Pertemuan 9',
            'nim'     => '2026-P9-001',
            'github'  => 'raptamayahya21-prb'
        ]
    ]);
});

// Bonus 2: Rute parameter /hello/{nama}
Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
});
