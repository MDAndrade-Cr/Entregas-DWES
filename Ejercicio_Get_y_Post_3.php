<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 3</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="get">
    <label for="producto">Producto</label>
    <input type="text" id="producto" name="producto"><br>
</form>

<?php
if (isset($_GET['producto'])) {
    echo "Producto buscado: " . $_GET['producto'] . "<br>";
}
?>

</body>
</html>