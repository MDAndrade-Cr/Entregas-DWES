<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Get y Post 13</title>
    <meta charset="UTF-8">
</head>

<body>

<h1>Consulta películas</h1>
<form method="get">
<label for="genero">Género</label>
<select name="genero" id="genero">
    <option value="accion">Acción</option>
    <option value="comedia">Comedia</option>
    <option value="cficcion">Ciencia ficción</option>
    <option value="terror">Terror</option>
</select>
<input type="submit">
</form>
<br>
<?php
$accion = array("Capitán América","Tropa de élite","Transformers");
$comedia = array("Borat","Mayday","Palm Springs");
$cficcion = array("Interestelar","Steins; Gate");
$terror = array("IT la cosa","Halloween","Resident evil");
function mostrarPeliculas($peliculas) {
    foreach ($peliculas as $peli) {
        echo $peli . "<br>";
    }
}
if(isset($_GET["genero"])) {
    $genero = $_GET["genero"];
    switch ($genero) {
        case "accion":
            echo "<h3> Acción </h3>";
            mostrarPeliculas($accion);
            break;
        case "comedia":
            echo "<h3> Comedia </h3>";
            mostrarPeliculas($comedia);
            break;
        case "cficcion":
            echo "<h3> Ciencia ficción </h3>";
            mostrarPeliculas($cficcion);
            break;
        case "terror":
            echo "<h3> Terror </h3>";
            mostrarPeliculas($terror);
            break;
        default:
        break;
    }
}
?>

<h1>Reserva entradas</h1>
<form method="post">
<p> 
<input type="text" id="nombre" name="nombre">
<label for="nombre"> Nombre</label> <br>
<input type="text" id="pelicula" name="pelicula">
<label for="pelicula"> Película</label> <br>
<input type="number" id="numero" name="numero">
<label for="numero">Número de entradas</label>
</p>

<label for="tipo">Tipo de entrada</label>
<select name="tipo">
    <option value="normal">Normal</option>
    <option value="estudiante">Estudiante</option>
    <option value="jubilado">Jubilado</option>
</select>
<p><input type="submit"></p>
</form>

<?php
$nombre = "";
$pelicula = "";
$numero = 0;
$tipo = "";
$precio = 8;
$descuento = 0;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $pelicula = $_POST["pelicula"];
    $numero = $_POST["numero"];
    $tipo = $_POST["tipo"];
    if($tipo == "estudiante") {
        $descuento = 0.25;
    } else if($tipo == "jubilado") {
        $descuento = 0.4;
    }
    if($numero > 0) {
        if($numero >= 5) {
            echo "Nombre: " . $nombre . "<br>";
            echo "Película: " . $pelicula . "<br>";
            echo "Entradas: " . $numero . "<br>";
            echo "Tipo: " . $tipo . "<br>";
            echo "Precio total: " . (($precio * $numero) - (($precio * $numero) * $descuento)) . "€ <br>";
            echo "Reserva para un grupo numeroso <br>";
        } else {
                        echo "Nombre: " . $nombre . "<br>";
            echo "Película: " . $pelicula . "<br>";
            echo "Entradas: " . $numero . "<br>";
            echo "Tipo: " . $tipo . "<br>";
            echo "Precio total: " . (($precio * $numero) - (($precio * $numero) * $descuento)) . "€ <br>";
        }
    } else {
        echo "Error <br>";
    }
}

?>
</body>
</html>