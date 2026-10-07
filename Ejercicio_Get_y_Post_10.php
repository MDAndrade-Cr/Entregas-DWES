<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 10</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="get">
    <label for="precio">Precio que está dispuesto a pagar</label>
    <input type="number" id="precio" name="precio"><br>
    <input type="submit"><br>
</form>

<?php
if(isset($_GET['precio'])) {
    $precio = $_GET['precio'];
    if($precio < 20) {
        echo "Productos económicos <br>";
    } else if($precio >= 20 && $precio < 50) {
        echo "Productos de precio medio <br>";
    } else {
        echo "Productos de gama alta <br>";
    }      
}
?>

</body>
</html>