<html>
<head><title>Operadores lógicos</title></head>

<body>

<?php

$logueado = true; // variable logueado
$administrador = false; // variable administrador
$voluntario = true; // variable voluntario

echo "<br> Si está logueado y es admin <br>"; 
var_dump($logueado && $administrador);
echo "<br> Si es admin o voluntario </br>";
var_dump($administrador || $voluntario);
echo "<br> Si no está logueado </br>";
var_dump(!$logueado);
echo "<br> Si es admin o voluntario, no los dos </br>";
var_dump($administrador xor $voluntario);

?>