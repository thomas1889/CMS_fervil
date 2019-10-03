<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ("../controlador/conexion.php");

$jerarquia = $_POST['pagina'];
$titulo = $_POST['Titulo'];
$texto = $_POST['texto'];

$sql = "UPDATE pagina
        SET pagina.titulo ='" . $titulo . "', pagina.texto ='" . $texto . "'
        WHERE id_pagina = '" . $jerarquia . "'";

$query = mysql_query($sql) or die(mysql_error());
?>
<body>
    <script type="text/javascript">
        window.alert('Texto actualizado correctamente');
        window.location = "../index.php";
    </script>
</body>