<html>
<head><title>Integradora</title></head>
<body>
    
<?php

$jugadores = ["Ana" => 850, "Carlos" => 420, "Marta" => 1250, "Luis" => 670, "Laura" => 980];
asort($jugadores);
$menos500 = "";
$entre500y799 = "";
$entre800y999 = "";
$mas1000 = "";
$contarJugadores = 0;
$contarAlMenos500 = 0;
$totalPuntos = 0;
foreach($jugadores as $nombre => $puntos) {
    if($puntos < 500) {
        $menos500 .= " " . $nombre;
        $totalPuntos += $puntos;
    } else if($puntos >= 500 && $puntos < 800) {
        $entre500y799 .= " " . $nombre;
        $contarAlMenos500++;
        $totalPuntos += $puntos;
    } else if($puntos >= 800 && $puntos <1000) {
        $entre800y999 .= " " . $nombre;
        $contarAlMenos500++;
        $totalPuntos += $puntos;
    } else {
        $mas1000 .= " " . $nombre;
        $contarAlMenos500++;
        $totalPuntos += $puntos;
    }
    $contarJugadores++;
}

echo "Menos de 500 puntos →$menos500 <br>";
echo "Entre 500 y 799  →$entre500y799 <br>";
echo "Entre 800 y 999  →$entre800y999 <br>";
echo "Más de 1000 puntos  →$mas1000 <br>";
echo "Cantidad de jugadores: $contarJugadores <br>";
echo "Jugadores con al menos 500 puntos: $contarAlMenos500 <br>";
// echo "Total puntos: $totalPuntos <br>";
echo "Puntuación media: " . ($totalPuntos / $contarJugadores) . "<br>";
$puntuacionMasAlta = end($jugadores);
$jugadorMayorPuntuacion = key($jugadores);
echo "Puntuación más alta: $puntuacionMasAlta <br>";
$puntuacionMasBaja = reset($jugadores);
echo "Puntiación más baja: $puntuacionMasBaja <br>";
echo "Jugador con mayor puntuación $jugadorMayorPuntuacion <br> "


?>

</body>
</html>