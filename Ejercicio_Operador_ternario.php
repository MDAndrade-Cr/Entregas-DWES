<html>
<head><title>Operador Ternario</title></head>
<body>
    
<?php
echo "<h1> Ejercicio 1 - Mayor o menor de edad </h1>";
$edad = 15;
$mensaje = ($edad >=18)? "Mayor de edad":"Menor de edad";
echo "<p> $mensaje </p>";

echo "<h1> Ejericio 2 - N&uacutemero par o impar </h1>";
$numero = 8;
$mensaje2 = ($numero % 2 == 0)? "Par":"Impar";
echo "<p> $mensaje2 </p>";
?>

</body>
</html>