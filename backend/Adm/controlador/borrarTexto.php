<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ("../controlador/conexion.php");

$id_pagina = $_REQUEST ['Borrarcodigo'];

$sql = "DELETE
        FROM pagina
	WHERE id_pagina='" . $id_pagina . "'";
mysql_query($sql) or die(mysql_error());
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
            window.location = "../../index.php";
        </script>
    </body>
</html>
