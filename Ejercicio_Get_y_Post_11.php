<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 11</title>
    <meta charset="UTF-8">
</head>

<body>
<form method="get">
    <fieldset>
        <legend>Búsqueda</legend>
        <label for="producto">Buscar producto: </label>
        <input type="text" id="producto" name="producto"><br>
        <input type="submit"><br>
    </fieldset>
</form>


<form method="post">
    <fieldset>
        <legend>Registro</legend>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="correo">Correo: </label>
        <input type="email" id="correo" name="correo"><br>
        <label for="ciudad">Ciudad: </label>
        <input type="text" id="ciudad" name="ciudad"><br>
        <input type="submit"><br>
    </fieldset>
</form>

<?php

$busqueda = "";
$registro = "";

if(isset($_GET['producto'])) {
    $busqueda = "Producto buscado: " . $_GET['producto'] . "<br>";
    $registro = "";
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
$registro = "Usuario registrado. <br> Nombre: {$_POST["nombre"]} <br> Correo: {$_POST["correo"]} <br> Ciudad: {$_POST["ciudad"]} <br>";
$busqueda = "";
}

echo ($busqueda);
echo ($registro);
?>

</body>
</html>