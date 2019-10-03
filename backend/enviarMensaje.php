<?php
include ('./Model/conexion.php');

$mail = 'Fervil';
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['mail'];
$mensajeC = $_POST['mensaje'];
$fecha = date('Y-m-d H:i');
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = " \r\n";

$mensaje = '
                Este mensaje fue enviado por: 
                Nombre: ' . $nombre . '                
                Su telefono es: ' . $telefono . '
                Su Correo es:  ' . $correo . '
                El mensaje es  ' . $mensajeC . ' 
                ';

$mensaje .= "Enviado el " . date('d/m/Y', time());
//$para = 'info@fervil.co';
$para = 'santaigobarrios08@gmail.com';
$asunto = 'Solicitud de Contacto';
mail($para, $asunto, utf8_decode($mensaje)/* , $header */);



$sql = "insert into registros (nombre, correo, telefono, mensaje, fecha)
  values ('" . $nombre . "','" . $correo . "','" . $telefono . "','" . $mensajeC . "','" . $fecha . "')";


mysql_query($sql) or die(mysql_error());


/* header('location:../index.html'); */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>formulario</title>
    </head>

    <body>
        <script language="JavaScript">

            alert("Su mensaje fué enviado correctamente.");
            setTimeout("update()", 100);
            function update() {
                document.location.href = "http://fervil.co/";
            }
        </script>
    </body>
</html>