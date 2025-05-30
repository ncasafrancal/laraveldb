<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Alumno;
use Illuminate\Support\Facades\DB;
use SweetAlert2\Laravel\Swal;

Route::get('/', function () {
    return view('welcome');
});

// <-- Alumno -->
Route::get('/alumno', [Alumno::class, 'index']);

Route::get('/alumno/create', function () {
    return view('create');
});

Route::get('/alumno/edit/{id}', function (string $id) {
    $alumno = DB::table('alumno')->find($id);
    return view('edit')->with(compact('id', 'alumno'));
});

Route::post('/alumno/store', [Alumno::class, 'store']);

Route::post('/alumno/edit/update', [Alumno::class, 'update']);

Route::get('/alumno/delete/{id}', function (string $id) {
    $row = DB::delete("DELETE FROM Alumno where id=$id");

    Swal::toast([
        'icon'=> "success",
        'position' => "top-end",
        'title' => "Eliminado correctamente",
        'showConfirmButton' => false,
        'timer' => 3000,
        'timerProgressBar' => true
    ]);
    return redirect()->action([Alumno::class, 'index']);
});

// <-- Curso -->
Route::get('/curso', function () {
    return view('curso');
});

