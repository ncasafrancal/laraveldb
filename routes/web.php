<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Alumno;

Route::get('/', function () {
    return view('welcome');
});

// <-- Alumno -->
Route::get('/alumno', [Alumno::class, 'index']);

Route::get('/alumno/create', function () {
    return view('create');
});

Route::post('/alumno/store', [Alumno::class, 'store']);

// <-- Curso -->
Route::get('/curso', function () {
    return view('curso');
});

