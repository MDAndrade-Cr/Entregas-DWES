<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 1</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="post">
    <label for="edad">Edad: </label>
    <input type="number" id="edad" name="edad"><br>
    <input type="submit" value="subir">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if($_POST["edad"] >= 18) {
        echo "Mayor de edad";
    } else {
        echo "Menor de edad";
    }
}

?>

</body>
</html>