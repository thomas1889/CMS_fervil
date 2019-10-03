<?php
include ("../controlador/conexion.php");


print_r($titulo = $_REQUEST['titulo']);
print_r($texto = $_REQUEST['texto']);
print_r($ubicacion = $_REQUEST['ruta']);



$sql = "INSERT INTO imagen ( nombre, ubicacion)
        VALUES ('" . $titulo . "', '" . $ubicacion . "')";

mysql_query($sql)or die(mysql_error());

print_r($id_Img1 = mysql_insert_id()); //obtener el id de el ultimo query ejecutado.



$sql3 = "INSERT INTO pagina (titulo, id_imagen , texto )
            VALUES ('" . $titulo . "','" . $id_Img1 . "','" . $texto . "')";

mysql_query($sql3)or die(mysql_error());
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertando Producto...</title>
    </head>
    <body>
        <script type="text/javascript">
            window.alert('Añadido  nuevo Producto.');
            window.location = "../";
        </script>
    </body>
</html>