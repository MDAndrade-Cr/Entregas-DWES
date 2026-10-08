<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 1</title>
    <meta charset="UTF-8">
</head>

<body>
<h1>Buscar usuario</h1>
<form method="get">
    <label for="buscarnombre">Buscar usuario </label><br>
    <input type="text" id="buscarnombre" name="buscarnombre"><br>
    <input type="submit"><br>
</form>
<h1>Registrar usuario</h1>
<form method="post">
    <label for="nombre">Nombre: </label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellidos">Apellidos:</label><br>
    <input type="text" id="apellidos" name="apellidos"><br>
    <label for="edad">Edad: </label><br>
    <input type="number" id="edad" name="edad"><br>
    <label for="correo">Correo: </label><br>
    <input type="email" id="correo" name="correo"><br>
    <input type="submit"><br>
</form>

<?php

$busqueda = "";
$edad = "";
if(isset($_GET['buscarnombre'])) {
    $busqueda = "Buscando usuario: " . $_GET['buscarnombre'] . "<br>";
    $edad = "";
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    if($_POST['edad'] < 18) {
        $edad = "Menor de edad";
    } else if($_POST['edad'] > 17 && $_POST['edad'] < 65) {
        $edad = "Adulto";
    } else {
        $edad = "Senior";
    }
    $busqueda = "";
}

echo "<h1> Resultado </h1>";
echo $busqueda;
echo $edad;


?>

</body>
</html>