<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 7</title>
    <meta charset="UTF-8">
</head>

<form method="get">
    <fieldset>
        <legend>GET</legend>
        <label for="producto">Producto: </label>    
        <input type="text" id="producto" name="producto">
        <input type="submit" value="subir">
    </fieldset>
</form>

<form method="post">
    <fieldset>
        <legend>POST</legend>
        <label for="producto">Producto: </label>    
        <input type="text" id="producto" name="producto">
        <input type="submit" value="subir">
    </fieldset>
</form>

<body>

<?php
if(isset($_GET['producto'])) {
echo "Producto: " . $_GET['producto'] . "<br>";
}

if($_SERVER ['REQUEST_METHOD'] == "POST") {
echo "Producto: {$_POST["producto"]} <br>";
}
?>

</body>
</html>