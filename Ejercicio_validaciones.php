<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio validacion</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Bloque A</legend>
        <input type="email" id="correo" name="correo">
        <label for="correo">Email</label><br>
        <input type="number" id="edad" name="edad">
        <label for="edad">Edad</label><br>
        <input type="url" id="link" name="link">
        <label for="link">URL</label><br>
        <input type="ip" id="ip" name="ip">
        <label for="ip">IP</label><br>
        <input type="number" id="cpostal" name="cpostal">
        <label for="cpostal">Código postal</label><br>
        <input type="text" id="matricula" name="matricula">
        <label for="matricula">Matrícula</label><br>
        <input type="text" id="nombre" name="nombre">
        <label for="nombre">Nombre propio</label><br>
        <input type="time" id="hora" name="hora">
        <label for="hora">Hora</label><br>
        <input type="submit">
    </fieldset>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email no válido <br>";
    } else {
        echo "Email válido <br>";
    }
    $edad = filter_var($_POST['edad'] ?? '', FILTER_VALIDATE_INT);
    if($edad === false) {
        echo "Edad no válida <br>";
    } else {
        echo "Edad válida <br>";
    }
    $url = $_POST['url'] ?? '';
    if(!filter_var($url, FILTER_VALIDATE_URL)) {
        echo "URL válida <br>";
    } else {
        echo "URL no válida <br>";
    }
    $ip = $_POST['ip'] ?? '';
    if(!filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "IP no válida <br>";
    } else {
        echo "IP válida";
    }
}
?>

</body>
</html>