<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;

class Alumno extends Controller {

    public function index(): View {
        $alumnos = DB::select("SELECT * FROM Alumno");
        return view('alumno', [ 'alumnos' => $alumnos ]);
    }

    public function store(){
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];

        $activo = isset($_POST['activo']) == "on" ? 1 : 0;

        DB::insert("INSERT INTO Alumno(id, nombres, apellidos, activo) VALUES(?,?,?,?)", [$id, $nombres, $apellidos, $activo]);
        
        return redirect()->action([Alumno::class, 'index']);
    }

    public function update(){
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];

        $activo = isset($_POST['activo']) == "on" ? 1 : 0;

        DB::update("UPDATE Alumno SET nombres=?, apellidos=?, activo=? WHERE id=?", 
        [$nombres, $apellidos, $activo, $id]);

        return redirect()->action([Alumno::class, 'index']);
    }

    public function delete () {
        
    }
}

?>