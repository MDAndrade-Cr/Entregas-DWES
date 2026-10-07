<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 9</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="post">
    <label for="nombre">Nombre del producto: </label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="precio">Precio: </label>
    <input type="number" id="precio" name="precio"><br>
    <input type="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $descuento = $_POST['precio'] * 0.1;
    $precioFinal = $_POST['precio'] - $descuento;
    echo "Producto: {$_POST["nombre"]} <br>";
    echo "Precio: {$_POST["precio"]} <br>";
    echo "Descuento: $descuento <br>";
    echo "Precio final: $precioFinal <br>";
    
}
?>

</body>
</html>