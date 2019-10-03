<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ('controlador/conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!--<link rel="icon" href="../../Assets/Img/favicon.ico">-->
        <title>Gestor de Contenido</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
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
                            <li class="active"><a href="index.php">Empresa</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Editar Página<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="filosofia.php">Filosofia</a></li>
                                    <li><a href="calidad.php">Calidad</a></li>

                                    <li class="dropdown-submenu"><a href="#">Servicios</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="pServicios.php">Página de Servicios</a></li>
                                            <li><a href="ser_empresas.php">Empresas</a></li>
                                            <li><a href="ser_cathering.php">Cathering</a></li>
                                            <li><a href="ser_eventos.php">Eventos Especiales</a></li>
                                            <li><a href="ser_hospitales.php">Hospitales</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="productos.php">Productos</a></li>

                                </ul>
                            </li>

                            <li><a href="Contactos.php">Ver Base de datos de los contactos</a></li>
                            <li><a href="faq.php">Preguntas Frecuentes</a></li>
                        </ul>
                      
                        <form action="#" class="navbar-form navbar-right" role="search">
                             <a href="../logout.php"><button type="button" class="btn btn-primary">
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
                    <h2><a href="index.php"><img src="../../images/logo.png" width="200px" height="auto"></a></h2>
                    <p>Adminsitrador de Contenidos</p>
                </div>
            </section>

            <section class="main container">
                <div class="row">
                    <section class="posts col-md-12">

                        <article class="post clearfix">

                            <section>


                                <h2>Añadir un nuevo  <span style="color:red;"> Producto</span> <br> </h2><br/><br/>


                                <form id="FnuevoArt" name="FnuevoArt" method="POST" action="modelo/guardarNuevoArt.php">
                                    <table class='table table-hover' style='text-align:justify;'>
                                        <tr>
                                            <!--<td>Id Articulo</td>-->
                                            <td>Titulo</td>
                                            <td>Texto</td>
                                            <td>Ruta de la imágen</td>
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td><textarea  id="titulo" name="titulo" placeholder="Ej: producto10" required></textarea></td>
                                            <td><textarea id="texto" name="texto" placeholder="Ej: Lorem Ipsum Dolor." required></textarea></td>
                                            <td><textarea id="ruta" name="ruta" placeholder="img/imagen2.jpg" required></textarea></td>
                                            <td> <button type="submit" class="btn btn-success">Guardar Todo</button></td>
                                        </tr>
                                    </table>
                                    <br><br><br>
                                </form>

                            </section>

                        </article>
                        <div style="padding-bottom:100px;padding-top: 10px;"></div>
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

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/myfunctions.js"></script>

    </body>
</html>