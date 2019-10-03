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
        <link rel="icon" href="../../Assets/Img/favicon.ico">
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
                <h2><a href="index.php"><img src="../../Assets/Img/logo.png" width="200px" height="auto"></a></h2>
                <p>Adminsitrador de Contenidos</p>
            </div>
        </section>

        <section class="main container">
            <div class="row">
                <section class="col-md-12">

                    <article class="col-sm-12">

                        <section class="col-md-8">

                            <ol>
                                <strong><h2>Edite los Textos en la página de <span style="color:red;">FILOSOFÍA</span></h2> </strong><br/><br/>
                            </ol>

                            <?php
                            $sql = "SELECT pagina.id_pagina, titulo, pagina.texto 
                                    FROM pagina
                                    WHERE titulo LIKE 'filosofia%'
                                    ";

                            $query = mysql_query($sql) or die(mysql_error());

                            echo "<table class='table table-hover' style='text-align:justify;'>";
                            echo "<tr>"
                            . "<td>Jerarquía</td>"
                            . "<td>Página</td>"
                            . "<td>Contenido</td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "</tr>";

                             while ($pagina = mysql_fetch_array($query)) {
                                echo
                                "<tr>"
                                . "<td>" . $pagina['id_pagina'] . "</td>"
                                . "<td style='color:red;'>" . $pagina['titulo'] . "</td>"
//                                . "<td><img width='100%' height='auto' src='../../" . $pagina['ubicacion'] . "'></td>"
                                . "<td>" . $pagina['texto'] . "</td>"
                                . "<td><a href='../../index.php' target='_blank'><input type='button' class='btn btn-success' name='editar' id='editar' value=\"Ver Resultado\"></a></td>"
                                . "<td><input type='button' class='btn btn-info' name='editar' id='editar' onclick='editar(" . $pagina['id_pagina'] . ");' value=\"Editar\"></td>"
                                . "</tr>";
                            }
                            echo "</table>";
                            ?>

                            <form id="form2" name="form2" method="POST" action="controlador/editarTexto.php">
                                <input type="hidden" id="id_texto" name="id_pagina">
                            </form>
                        </section>

                        <section class="col-md-4" >
                            <span>aquí va iframe ajustado, correspondiente a la página a editar.</span>
                        </section>
                    </article>

                    <article  class="col-sm-12">
                        <section>
                            <ol>
                                <strong>  <h2>Edite las imágenes en la  página de <span style="color:red;">FILOSOFÍA</span></h2></strong><br/><br/>
                            </ol>
                            <?php
                            $sql2 = "SELECT pagina.id_pagina,  pagina.titulo, pagina.id_imagen, imagen.ubicacion
                                    FROM pagina
                                    INNER JOIN imagen ON pagina.id_imagen = imagen.id_imagen
                                    WHERE  titulo LIKE 'filosofia%'
                                    ";

                            $query2 = mysql_query($sql2) or die(mysql_error());

                            echo "<table class='table table-hover' style='text-align:justify;'>";
                            echo "<tr>"
                            . "<td>Jerarquía</td>"
                            . "<td>Página</td>"
                            . "<td>Imágen</td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "</tr>";

                            while ($imagen = mysql_fetch_array($query2)) {
                                echo
                                "<tr>"
                                . "<td>" . $imagen['id_pagina'] . "</td>"
                                . "<td style='color:red;'>" . $imagen['titulo'] . "</td>"
                                . "<td><img width='30%' height='auto' src='../../" . $imagen['ubicacion'] . "'></td>"
//                                . "<td>" . $pagina['contenido'] . "</td>"
                                . "<td><a href='../../index.php' target='_blank'><input type='button' class='btn btn-success' name='editar' id='editar' value=\"Ver Resultado\"></a></td>"
                                . "<td><input type='button' class='btn btn-info' name='editar' id='editar' onclick='editar2(" . $imagen['id_imagen'] . ");' value=\"Editar\"></td>"
                                . "</tr>";
                            }
                            echo "</table>";
                            ?>

                             <form id="form4" name="form4" method="POST" action="controlador/editarImagen.php">
                                <input type="hidden" id="id_imagen" name="id_imagen">
                            </form>
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

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/myfunctions.js"></script>

    </body>
</html>