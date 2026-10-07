<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 1</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad"><br>
    <input type="submit" value="Subir"><br>
</form>
<?php
if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    echo "Nombre: " . $_GET['nombre'] . "<br>";
    echo "Edad: " . $_GET['edad'] . "<br>";   
}
?>
</body>
</html>