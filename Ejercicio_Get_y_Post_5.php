<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 1</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="correo">Correo: </label>
    <input type="email" id="correo" name="correo"><br>
    <label for="mensaje">Mensaje: </label>
    <textarea id="mensaje" name="mensaje"></textarea><br>
    <input type="submit" id="subir"><br>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "Nombre: {$_POST["nombre"]} <br>";
    echo "Correo electrónico: {$_POST["correo"]} <br>";
    echo "Mensaje: {$_POST["mensaje"]} <br>";
}
?>

</body>
</html>