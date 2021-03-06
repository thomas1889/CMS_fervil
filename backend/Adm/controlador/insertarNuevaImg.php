<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ('conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="icon" href="../../../Assets/Img/favicon.ico">
        <title>Gestor de Contenido</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <style type="text/css">

            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }
            table tr td{
                padding-left:10px;
                padding-right:10px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                            <span class="sr-only">Desplegar / Ocultar Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a href="#" class="navbar-brand">Ecustic</a>-->
                    </div>
                    <!-- Inicia Menu -->
                    <div class="collapse navbar-collapse" id="navegacion-fm">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="../index.php">Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Editar Página<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="../empresa.php">Empresa</a></li>
                                    <li><a href="../Productos.php">Productos</a></li>

                                    <li class="dropdown-submenu"><a href="#">Servicios</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../ser_ambiental.php">Ambiental</a></li>
                                            <li><a href="../ser_arquitectonico.php">Arquitectónico</a></li>
                                            <li><a href="../ser_industrial.php">Industrial</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../galeria.php">Galería</a></li>
                                    <li><a href="../articulos.php">Artículos</a></li>
                                    <li><a href="../Clientes.php">Clientes</a></li>
                                </ul>
                            </li>

                            <li><a href="../Contactos.php">Ver Base de datos de los contactos</a></li>
                            <li><a href="#">Preguntas Frecuentes</a></li>
                        </ul>
                        </ul>

                        <form action="" class="navbar-form navbar-right" role="search">
                            <a href="../../index.php"><button type="button" class="btn btn-primary">
                                    <label>Cerrar Sesión [Usuario]</label> <span class="glyphicon glyphicon-off"></span>
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <section class="jumbotron">
            <div class="container">
                <h2><a href="index.php"><img src="../../../Assets/Img/resources/logo-ecustic.png" width="200px" height="auto"></a></h2>
                <p>Adminsitrador de Contenidos</p>
            </div>
        </section>

        <section class="main container">
            <div class="row">
                <section class="posts col-md-12">

                    <article class="post clearfix">

                        <section>
                            <h2>Inserte la <span>Imagén</span> de un nuevo Cliente</h2>

                            <form id="nuevaImg" name="nuevaImg" method="POST" action="guardarNuevaImg.php">
                                <table class='table table-hover' style='text-align:justify;'>
                                    <tr>

                                        <td>Página</td>
                                        <td>Número de la imagen</td>
                                        <td>Nombre y esxtensión de la Imágen</td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <input type="text" id="nombre" name="nombre" placeholder="ej:cliente21.png"/>
                                            <br><br>
                                            <p>Recuerde llevar el número consecutivo de la imagen correspondiente a la pagina.
                                                <br> Ejemplo: cliente20, o articulo5.
                                            </p>
                                        </td>
                                        <td>
                                            <input type="text" id="ubicacion" name="ubicacion" placeholder="cliente12.png"/>
                                            <p>No olvide colocar el nombre del archivo insertado</p>
                                        </td>
                                        <td><input class="btn btn-primary" type="button" id="envian" name="envian" value="Insertar" onclick="validar();" ></td>
                                    </tr>
                                </table>

                            </form><br/><br/>
                        </section>

                    </article>
                </section>

            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <p>Optima TM 2015.</p>

                    </div>
                </div>
            </div>
        </footer>

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/myfunctions.js"></script>

    </body>
</html>