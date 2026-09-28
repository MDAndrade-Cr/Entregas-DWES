<html>
<head><title>Switch</title></head>
<body>
    
<?php

echo "<h1> Ejercicio 1 - Día de la semana </h1>";
$dia = 3;
switch($dia) {
    case 1:
        $mensaje = "Lunes";
        break;
    case 2:
        $mensaje = "Martes";
        break;
    case 3:
        $mensaje = "Miércoles";
        break;
    case 4:
        $mensaje = "Jueves";
        break;
    case 5:
        $mensaje = "Viernes";
        break;
    case 6:
        $mensaje = "Sábado";
        break;
    case 7:
        $mensaje = "Domingo";
        break;
    default:
        $mensaje = "Día incorrecto";
        break;
}
echo "<p> $mensaje </p>";

echo "<h1> Ejercicio 2 - Men&uacute </h1>";
$opcion = 2;
switch($opcion) {
    case 1:
        $mensaje = "Ver usuarios";
        break;
    case 2:
        $mensaje = "Ver productos";
        break;
    case 3:
        $mensaje = "Ver pedidos";
        break;
    case 4:
        $mensaje = "Salir";
        break;
    default:
        $mensaje = "Opción incorrecta";
        break;
}
echo "<p> $mensaje </p>";

?>

</body>
</html>