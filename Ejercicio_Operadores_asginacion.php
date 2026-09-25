<html>
<head><title>Ejercicio Concatenar</title></head>
<body>

<?php

$x = 10;
echo "<p> Suma asignación: " . ($x += 5) . "</p>";
echo "<p> Resta asignación: " . ($x -= 3) . "</p>";
echo "<p> Multiplicación asignación: " . ($x *= 2) . "</p>";
echo "<p> División asignación: " . ($x /= 4) . "</p>";
echo "<p> Módulo asignación: " . ($x %= 3) . "</p>";
echo "<p> Valor final: " . $x . "</p>";

?>