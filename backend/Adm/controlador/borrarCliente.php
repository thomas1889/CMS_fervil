<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ("../controlador/conexion.php");

$id_imagen = $_REQUEST ['Borrarcodigo'];

$sql="DELETE
		FROM imagen
		WHERE id_imagen='".$id_imagen."'";
 mysql_query($sql) or die (mysql_error());

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script type="text/javascript">
            window.alert('Clietne Eliminado Exitosamente.');
            window.location = "http://ecustic.co/Modelo/Adm/index.php";
        </script>
    </body>
</html>
