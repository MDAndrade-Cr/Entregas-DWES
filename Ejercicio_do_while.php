<html>
<head><title>Do While</title></head>
<body>
    
<?php
echo "<h1> Ejercicio 1 - Contar del 1 al 5 </h1>";
$num1 = 1;
do {
    echo $num1 . "<br>";
    $num1++;
} while($num1 <= 5);

echo "<h1> Ejercicio 2 - Contraseña </h1>";
$correcta = 1234;
$password = 1;
do {
    $password++; // la contraseña se incrementa en 1 para cada comprobación falsa hasta que sea verdadera
} while($password != $correcta);
echo "<p> Acceso permitido </p>";

?>

</body>
</html>