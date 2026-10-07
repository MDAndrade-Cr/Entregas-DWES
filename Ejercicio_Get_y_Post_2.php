<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 2</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="get">
    <label for="ciudad">Introduce tu ciudad: </label>
    <input type="text" id="ciudad" name="ciudad"><br>
    <input type="submit" value="Subir"><br>
</form>

<?php
if(isset($_GET['ciudad'])) {
    echo "Vives en " . $_GET['ciudad'] . "<br>";
}

?>

</body>
</html>