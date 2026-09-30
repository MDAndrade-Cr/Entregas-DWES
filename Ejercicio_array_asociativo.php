<html>
<head><title>Array asociativo</title></head>
<body>
    
<?php

echo "<h1> Ejercicio 1 - Agenda de contactos </h1>";
$agenda = ["Ana" => "600123456","Luis" => "611234567","Marta" => "622345678","Carlos" => "633456789"];
foreach($agenda as $nombre => $numero) {
    echo "$nombre: $numero <br>";
}


echo "<h1> Ejercicio 2 - Notas de una clase </h1>";
$notas = ["Ana" => 8.5,"Luis" => 4.2,"Marta" => 6.7,"Carlos" => 3.8,"Laura" => 9.1];
$aprobados = 0;
$suspensos = 0;
$total = 0;
$notaTotal = 0;
foreach($notas as $nombre => $nota) {
    if($nota >= 5) {
        echo "$nombre: $nota Aprobado <br>";
        $aprobados++;
        $total++;
        $notaTotal += $nota;
    } else {
        echo "$nombre: $nota Suspenso <br>";
        $suspensos++;
        $total++;
        $notaTotal += $nota;
    }
    }
    echo "Total aprobados: $aprobados <br>";
    echo "Total suspensos: $suspensos <br>";
    echo "Total alumnos: $total <br>";
    echo "Media:" . ($notaTotal / $total) . "<br>";


echo "<h1> Ejercicio 3 - Inventario de una tienda </h1>";
$diferentes = 0;
$unidades = 0;
$productos = ["Teclado" => 15,"Ratón" => 7,"Monitor" => 4,"Webcam" => 12,"Auriculares" => 3,"Impresora" => 8];
foreach($productos as $nombre => $cantidad) {
    if($cantidad < 5) {
        echo "Producto: $nombre cantidad: $cantidad (stock bajo) <br>";
        $diferentes++;
        $unidades += $cantidad;
            
    } else {
        echo "Producto: $nombre cantidad: $cantidad <br>";
        $diferentes++;
        $unidades += $cantidad;
    }
    }
echo "Total de productos diferentes: $diferentes <br>";
echo "Unidades almacenadas: $unidades <br>";
asort($productos);
$unidadesMaximas = end($productos);
$unidadesMinimas = 
$productoConMasUnidades = key($productos);
echo "Producto con más unidades: $productoConMasUnidades, cantidad: $unidadesMaximas <br>";
arsort($productos);
$unidadesMinimas = end($productos);
$productoConMenosUnidades = key($productos);
echo "Producto con menos unidades: $productoConMenosUnidades, cantidad: $unidadesMinimas <br>";


echo "<h1> Ejercicio 4 - Análisis de ventas </h1>";
$ventas = ["Ana" => 3250,"Luis" => 1850,"Marta" => 4720,"Carlos" => 2900,"Laura" => 5100,"Pedro" => 2150];
asort($ventas);
$MenosDosMil = "";
$MenosTresMil = "";
$MenosCuatroMil = "";
$MasCuatroMil = "";
foreach($ventas as $nombre => $cantidad) {
    if ($cantidad < 2000) {
        $MenosDosMil .=" " . $nombre;
    } else if($cantidad >= 2000 && $cantidad < 2999) {
        $MenosTresMil .=" ". $nombre;        
    } else if($cantidad >= 3000 && $cantidad < 4499) {
        $MenosCuatroMil .=" ".$nombre;
    } else {
        $MasCuatroMil .=" $nombre";
    }
}
echo "Menos de 2000 € → $MenosDosMil <br>";
echo "De 2000 € a 2999 € → $MenosTresMil <br>";
echo "De 3000 € a 4499 € → $MenosCuatroMil <br>";
echo "4500 € o más → $MasCuatroMil <br>";

?>

</body>
</html>