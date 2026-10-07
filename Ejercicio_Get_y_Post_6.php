<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 6</title>
    <meta charset="UTF-8">
</head>

<body>

<form method="get">
    <fieldset>
        <legend>Selecciona un producto</legend>
            <input type="radio" id="ordenadores" name="producto" value="ordenadores">
            <label for="ordenadores">Ordenadores</label><br>
            <input type="radio" id="perifericos" name="producto" value="perifericos">
            <label for="perifericos">Perifericos</label><br>
            <input type="radio" id="moviles" name="producto" value="moviles">
            <label for="moviles">Moviles</label><br>
            <input type="radio" id="componentes" name="producto" value="componentes">
            <label for="componentes">Componentes</label><br>
    </fieldset>

    <input type="submit">
</form>

<?php
if(isset($_GET['producto'])) {
    echo "Producto: " . $_GET['producto'] . "<br>";
}
?>

</body>
</html>