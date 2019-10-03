<?php
session_start();
require_once ('Adm/controlador/conexion.php');
if (empty($_SESSION['usuario'])) { // Comprobamos que las variables de sesión estén vacías
    ?>

    <html lang="es">

        <head>

            <meta charset="utf-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <link rel="icon" href="../Assets/Img/favicon.ico">

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Login</title>

            <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">

            <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap-theme.min.css">

            <link rel="stylesheet" href="../Assets/bootstrap/css/styles.css">

            <style>    
                body{

                    background-image: url(../../Img/fondo.jpg);
                    background-size: 100px;
                    background-repeat: repeat;
                }
            </style>
        </head>

        <body>

            <div class="container">

                <div class="col-md-12">

                    <div class="col-md-4"></div>

                    <div class="col-md-4" id="login">

                        <form class="form-signin" role="form" action="probar.php" id="formLogin" name="formLogin" method="POST">

                            <div class="text-center">

                                <img width="80%" height="auto" name="avatar" id="avatar" src="../Assets/Img/logo.png" alt="avatar">

                            </div>

                                                                                                    <!--<input id="mail" name="mail" type="text" class="form-control" required  pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" placeholder="Email">-->

                            <input id="mail" name="usuario" type="text" class="form-control" required placeholder="Email">
                            <input type="password" id="password" name="contrasena" id="contrasena" required  class="form-control" placeholder="Password">
                            <!--<a href="../Modelo/Adm/index.php">-->
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar" id="enviar">Iniciar sesión</button>

                            <!--</a>-->
                        </form>
                        <a href="http://fervil.co"><button class="btn btn-lg btn-default btn-block" type="button" name="enviar" id="enviar">Ir a Fervil.co</button></a>

                    </div>

                    <div class="col-md-4"></div>

                </div>

            </div>

            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

            <script src="../Assets/bootstrap/js/jquery.md5.min.js"></script>

            <script src="../Assets/bootstrap/js/bootstrap.min.js"></script>

            <script src="../Assets/bootstrap/js/script.js"></script>

        </body>

    </html>
<?php } else {
    ?>

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="icon" href="../Assets/Img/favicon.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="../Assets/bootstrap/css/styles.css">
        <style>
            .myButton {
                -moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
                -webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
                box-shadow:inset 0px 1px 0px 0px #cf866c;
                background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d0451b), color-stop(1, #bc3315));
                background:-moz-linear-gradient(top, #d0451b 5%, #bc3315 100%);
                background:-webkit-linear-gradient(top, #d0451b 5%, #bc3315 100%);
                background:-o-linear-gradient(top, #d0451b 5%, #bc3315 100%);
                background:-ms-linear-gradient(top, #d0451b 5%, #bc3315 100%);
                background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d0451b', endColorstr='#bc3315',GradientType=0);
                background-color:#d0451b;
                -moz-border-radius:3px;
                -webkit-border-radius:3px;
                border-radius:3px;
                border:1px solid #942911;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:20px;
                padding:20px 45px;
                text-decoration:none;
                text-shadow:0px 1px 0px #854629;
            }
            .myButton:hover {
                background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc3315), color-stop(1, #d0451b));
                background:-moz-linear-gradient(top, #bc3315 5%, #d0451b 100%);
                background:-webkit-linear-gradient(top, #bc3315 5%, #d0451b 100%);
                background:-o-linear-gradient(top, #bc3315 5%, #d0451b 100%);
                background:-ms-linear-gradient(top, #bc3315 5%, #d0451b 100%);
                background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc3315', endColorstr='#d0451b',GradientType=0);
                background-color:#bc3315;
            }
            .myButton:active {
                position:relative;
                top:1px;
            }
        </style>

    </head>

    <div style="margin:0 auto; margin-top:15%;text-align:center; border: 1px solid red;">
      <!--<h1 style="color:red;">¡ Error !<span > <br> Porfavor verifique los datos de acceso y pulse: <br><br></span><a href="entrada.php"><button class="myButton" > Reintentar</button></a> </h1>-->
        <p> 
        <h1>¡ Bienvenido ! <strong style="color: black;">
                <?= $_SESSION['usuario'] ?></strong> <br>
        </h1> 
        será redirigido en un instante o pulse el botón para salir.
    </p>
    <a href="logout.php"><button class="myButton" > Salir </button></a>
    </div>
    <script>
        setTimeout(function () {
            window.location.href = "Adm/"; //will redirect to your blog page (an ex: blog.html)
        }, 2000); //will call the function after 2 secs.
    </script>
    <?php
}
?>