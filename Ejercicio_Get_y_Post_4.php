<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 4</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellido">Apellidos: </label>
    <input type="text" id="apellido" name="apellido"><br>
    <label for="edad">Edad: </label>
    <input type="number" id="edad" name="edad"><br>
    <input type="submit" id="subir"><br>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "Nombre: {$_POST["nombre"]} <br>";
    echo "Apellidos: {$_POST["apellido"]} <br>";
    echo "Nombre: {$_POST["edad"]} <br>";
}
?>

</body>
</html>