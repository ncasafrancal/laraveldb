<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Alumno :.</title>
</head>
<body>
    <form action="store" method="POST">
        @csrf
        Id: <input type="text" name="id"> <br><br>
        Nombres: <input type="text" name="nombres"> <br><br>
        Apellidos: <input type="text" name="apellidos"> <br><br>
        Activo: <input type="checkbox" name="activo"> <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>