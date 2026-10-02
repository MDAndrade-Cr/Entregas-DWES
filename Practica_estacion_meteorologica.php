<html lang='es'>
<head><title>Page Title</title></head>

<body>
   
<?php

$datos = ["Santander" => 21, "Torrelavega" => 24, "Reinosa" => 17, "Castro Urdiales" => 22, "Potes" => 28, "Laredo" => 23];
$cuenta = 0;
$tempTotal = 0;
$mas23 = 0;
$extremosAltos = "";
$extremosBajos = "";
$localMenos18 = "";
$local18y23 = "";
$local23y27 = "";
$localMayor27 = "";

foreach ($datos as $local => $temp) {
    if($temp < 18) {
        $localMenos18 .= " " . $local;
        $tempTotal += $temp;
    } else if($temp >= 18 && $temp < 23) {
        $local18y23 .= " " . $local;
        $tempTotal += $temp;
    } else if($temp >= 23 && $temp < 27) {
        $local23y27 .= " " . $local;
        $tempTotal += $temp;
        $mas23++;
    } else {
        $localMayor27 .= " " . $local;
        $tempTotal += $temp;
        $mas23++;
        }
        $cuenta++;
    
    if($temp >= 25) {
        $extremosAltos .= " " . $local;
    }

    if($temp < 20) {
        $extremosBajos .= " " . $local;
    }
}
asort ($datos);
$tempMax = end($datos);
$localMax = key($datos);
$tempMin = reset($datos);
$localMin = key($datos);
$porcentajeMas23 = ($mas23 / $cuenta) * 100;

function listado($datos) {
    echo "<h2> Listado de localidades y temperaturas </h2>";
    foreach($datos as $local => $temp) {
        echo "Local: $local Temperatura: $temp <br>";
    };
}

function masAlta($localMax) {
    echo "<h2> Temperatura más alta </h2>";
    echo "Localidad: " . $localMax ."<br>";
}

function masBaja($localMin) {
    echo "<h2> Temperatura más baja </h2>";
    echo "Localidad: " . $localMin ."<br>";
}

function estadisticas($cuenta, $tempTotal, $mas23, $localMax, $tempMax, $localMin, $tempMin) {
    echo "<h2> Estadísticas generales </h2>";
    echo "Número de localidades registradas: $cuenta<br>";
    echo "Temperatura total acumulada: $tempTotal<br>";
    echo "Temperatura media: " . ($tempTotal / $cuenta) . "<br>";
    echo "Número de localidades con temperatura superior a 23: $mas23 <br>";
    echo "Localidad con la temperatura más alta: $localMax <br>";
    echo "Temperatura máxima registrada: $tempMax <br>";
    echo "Localidad con la temperatura más baja: $localMin <br>";
    echo "Temperatura mínima registrada: $tempMin <br>";
}
    
function ampliacion1($extremosAltos, $extremosBajos, $localMenos18, $local18y23, $local23y27, $localMayor27, $porcentajeMas23) {
    echo "<h3> AMPLIACIÓN 1 - DÍAS EXTREMOS </h3>";
    echo "Localidades que han superado los 25º (temperaturas extremas) $extremosAltos <br>";
    echo "Localidades que han tenido temperaturas por debajo de 20º (temperaturas extremas) $extremosBajos <br>";
    echo "Localidades con temperaturas abajo de 20º: $localMenos18 <br>";
    echo "Localidades con temperaturas entre 18 y 23º: $local18y23 <br>";
    echo "Localidades con temperaturas entre 23 y 27º: $local23y27 <br>";
    echo "Localidades con temperaturas superiores a 27º: $localMayor27 <br>";
}

function ampliacion2($tempTotal, $cuenta, $datos) {
    echo "<h3> AMPLIACIÓN 2 - COMPARACIÓN DE TEMPERATURAS </h3>";
    echo "Temperatura media: " . ($tempTotal / $cuenta) . "<br>";
    $abajoMedia = "";
    $encimaMedia = "";
    $cuentaAbajo = 0;
    $cuentaEncima = 0;
    foreach($datos as $local => $temp) {
        if($temp < ($tempTotal / $cuenta)) {
            $abajoMedia .= " " . $local;
            $cuentaAbajo++;
        } else {
            $encimaMedia .= " " . $local;
            $cuentaEncima++;
        }
    }
    echo "Localidades por encima de la media: $encimaMedia <br>";
    echo "Localidades por debajo de la media: $abajoMedia <br>";
    echo "Cantidad de locales por encima de la media: $cuentaEncima <br>";
    echo "Cantidad de locales por debajo de la media: $cuentaAbajo <br>";
}

function ampliacion3() {
    echo "<h2> Ranking de temperaturas </h2>";
}

$opcion = 1;
switch ($opcion) {
    case 1:
        listado($datos);
        break;
    case 2:
        masAlta($localMax);
        break;
    case 3:
        masBaja($localMin);
        break;
    case 4:
        estadisticas($cuenta, $tempTotal, $mas23, $localMax, $tempMax, $localMin, $tempMin);
        break;
    default:
        echo "Error";
        break;
}

?>

</body>
</html>