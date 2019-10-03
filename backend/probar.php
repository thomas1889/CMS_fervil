<?php
session_start();
include 'Adm/controlador/conexion.php'; // Conexion con la base de datos. 
if (isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario 
    // comprobamos que los campos usuario y contrasena no estén vacíos 
    if (empty($_POST['usuario']) || empty($_POST['contrasena'])) {
        echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
    } else {
        // "limpiamos" los campos del formulario de posibles códigos maliciosos 
        $usuario = mysql_real_escape_string($_POST['usuario']);
        $contrasena = mysql_real_escape_string($_POST['contrasena']);
        $contrasena = md5($contrasena); // Transformo a md5 la contraseña. 
        // comprobamos que los datos ingresados en el formulario coincidan con los de la BD 
        $sql = mysql_query("SELECT * FROM empleado WHERE usuario='" . $usuario . "' AND contrasena='" . $contrasena . "'");
        if ($row = mysql_fetch_array($sql)) {
            $_SESSION['usuario_id'] = $row['id']; // creamos la sesion "usuario_id" y le asignamos como valor el campo id 
            $_SESSION['usuario'] = $row["usuario"]; // creamos la sesion "usuario" y le asignamos como valor el campo usuario 
            header("Location: Adm/index.php");
        } else {
            ?> 
            <meta charset="utf-8">
            <style type="text/css">

                html {
                    background-image: url('../Assets/Img/fondo.jpg');
                    background-repeat:repeat;
                    background-position: top center;
                    /*background-color: #eee;*/

                }
                .myButton {
                    -moz-box-shadow: 0px 10px 14px -7px #3e7327;
                    -webkit-box-shadow: 0px 10px 14px -7px #3e7327;
                    box-shadow: 0px 10px 14px -7px #3e7327;
                    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
                    background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
                    background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
                    background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
                    background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
                    background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
                    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
                    background-color:#77b55a;
                    -moz-border-radius:10px;
                    -webkit-border-radius:10px;
                    border-radius:10px;
                    border:1px solid #4b8f29;
                    display:inline-block;
                    cursor:pointer;
                    color:#ffffff;
                    font-family:Trebuchet MS;
                    font-size:16px;
                    font-weight:bold;
                    padding:15px 50px;
                    text-decoration:none;
                    text-shadow:0px 1px 0px #5b8a3c;
                }
                .myButton:hover {
                    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
                    background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
                    background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
                    background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
                    background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
                    background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
                    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
                    background-color:#72b352;
                    text-transform: uppercase;
                }
                .myButton:active {
                    position:relative;
                    top:1px;
                }
            </style>
            <div style="margin:0 auto; margin-top:15%;text-align:center; border: 1px solid red;">
                <h1 style="color:red;">¡ Error !<span style="color: black;"> <br> Porfavor verifique los datos de acceso y pulse: <br><br></span><a href="index.php"><button class="myButton" > Reintentar</button></a> </h1>
            </div>
            <?php
        }
    }
} else {
    header("Location: index.php");
}
