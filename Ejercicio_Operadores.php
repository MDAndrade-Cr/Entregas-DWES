<html>
<head><title>Ejercicio Operadores</title></head>

<body>

<?php

$numero1 = 30;
$numero2 = 6;
echo "<h1>Operadores básicos</h1>";
echo "<p> Suma: " . ($numero1 + $numero2) . "</p>";
echo "<p> Resta: " . ($numero1 - $numero2) . "</p>";
echo "<p> Multiplicación: " . ($numero1 * $numero2) . "</p>";
echo "<p> División: " . ($numero1 / $numero2) . "</p>";
echo "<p> Módulo: " . ($numero1 % $numero2) . "</p>";
echo "<h1>Operadores de comparación</h1>";
echo "<p> Comparación: " . ($numero1 > $numero2) . "</p>";
echo "<p> Comparación doble: " . ($numero1 > 5 && $numero2 > 5) ."</p>";
echo "<p> Comparación condicional: " . ($numero1 > 5 OR $numero2 > 5) . "</p>";

?>

</body>
</html>