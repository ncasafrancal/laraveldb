@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="alumno/create">Nuevo Alumno</a>
    {{-- <a href="{{ route(create)}}">Nuevo Alumno</a> --}}
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Activo</td>
            <td>Acción</td>
        </tr>
        @foreach($alumnos as $alumno)

            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombres }}</td>
                <td>{{ $alumno->apellidos }}</td>
                <td>{{ $alumno->activo }}</td>
                <td>
                    <a href="/alumno/edit/{{ $alumno->id }}">Editar</a>
                    <a href="/alumno/delete/{{ $alumno->id }}">Eliminar</a>
                </td>
            </tr>

        @endforeach
    </table>


</body>
</html>