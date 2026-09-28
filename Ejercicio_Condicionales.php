<html>
<head><title>Ejercicio condicionales</title></head>
<body>

<?php
echo "<h1> Ejercicio 1 - Mayor de edad </h1>";
echo "<h2> Utilizando if/else: </h2>";
$edad = 20; // declara edad y se le asigna 20
if($edad < 18) {
    $mensaje1 = "Menor de edad";
} else {
    $mensaje1 = "Mayor de edad";
}
echo "<p> $mensaje1 </p>";

echo "<h2> Utilizando operador ternario: </h2>";
$mensaje2=($edad>=18)? "Mayor de edad":"Menor de edad";
echo "<p> $mensaje2 </p>";

echo "<h1> Ejercicio 2 - N&uacutemero positivo, negativo o cero </h1>";
$numero = -5;
if($numero > 0) {
    $mensaje3 ="Positivo";
} else if($numero < 0) {
    $mensaje3 ="Negativo";
} else {
    $mensaje3 ="Cero";
}
echo "<p> $mensaje3 </p>";

echo "<h1> Ejercicio 3 - Contraseña </h1>";
$password = "1234";
if($password == "1234") {
    $mensaje4 = "Contraseña correcta";
} else {
    $mensaje4 = "Contraseña incorrecta";
}
echo "<p> $mensaje4 </p>";
?>

</body>

</html>