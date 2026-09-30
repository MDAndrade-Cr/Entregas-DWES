<html>
<head><title>For each</title></head>
<body>
    
<?php
echo "<h1> Ejercicio 1 - Recorrer un array </h1>";
$colores = ["rojo","verde","azul","amarillo"];
foreach($colores as $valor) {
    echo $valor . "<br>";
}

echo "<h1> Ejercicio 2 - Lista de nombres </h1>";
$nombres = ["Ana","Luis","Pedro","Marta","Juan"];
foreach($nombres as $valor) {
    echo $valor . "<br>";
}

echo "<h1> Ejercicio 3 - Notas </h1>";
$notas = ["7","4","9","6","3","8"];
foreach($notas as $valor) {
    if($valor >= 5) {
        echo $valor . " → Aprobado <br>";
    } else {
        echo $valor . " → Suspenso <br>";
    }
}

?>

</body>
</html>