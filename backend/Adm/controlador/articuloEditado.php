<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ("../controlador/conexion.php");

$id_art = $_REQUEST['idArt'];
$titulo = $_REQUEST['titulo'];
$textoPreview = $_REQUEST['textoPreview'];
$cabezote = $_REQUEST['cabezote'];
$archivo = $_REQUEST['archivo'];

$sql = "UPDATE  articulos
        SET id_art='".$id_art."', titulo='" . $titulo . "', preview ='" . $textoPreview . "', cabezote ='" . $cabezote . "', archivo ='" . $archivo . "'
        WHERE id_art = '" . $id_art."'";


$query = mysql_query($sql) or die(mysql_error());
?>
<body>
    <script type="text/javascript">
        window.alert('Articulo actualizado correctamente');
        window.location = "http://ecustic.co/Modelo/Adm/index.php";
    </script>
</body>