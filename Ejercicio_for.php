<html>
<head><title>For</title></head>
<body>
    
<?php
echo "<h1> Ejercicio 1 - Números del 1 al 10 </h1>";
for($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<h1> Ejercicio 2 - Números pares </h1>";
for($j = 2; $j <= 20; $j++) {
    if($j % 2 == 0) {
        echo $j . "<br>";
    }
}

echo "<h1> Ejercicio 3 - Tabla de multiplicar </h1>";
$numero = 5;
for($k = 1; $k <= 10; $k++) {
    echo $numero . " x " . $k . " = " . $numero * $k . "<br>";
}

echo "<h1> Ejercicio 4 - Suma del 1 al 100 </h1>";
$sum = 0;
for($l = 1; $l <= 100; $l++) {
    $sum += $l;
}
echo $sum . "<br>";

?>

</body>
</html>