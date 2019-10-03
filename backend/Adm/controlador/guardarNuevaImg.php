<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ("../controlador/conexion.php");

$nombreI = $_REQUEST['nombre'];
$ubicacion = $_REQUEST['ubicacion'];


$sql = "INSERT INTO imagen ( nombre, ubicacion)
        		values ('" . $nombreI . "', '" . $ubicacion . "')";

mysql_query($sql)or die(mysql_error());
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertando imagen...</title>
    </head>
    <body>
        <script type="text/javascript">
            window.alert('Insertada nueva Imagen.');
            window.location = "http://ecustic.co/Modelo/Adm/index.php";
        </script>
    </body>
</html>
