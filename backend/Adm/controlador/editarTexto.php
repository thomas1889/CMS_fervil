<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ("../controlador/conexion.php");
$texto = $_POST['id_pagina'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--        <link rel="icon" href="../../../Assets/Img/favicon.ico">-->
        <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Satisfy'/>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>Editando Producto...</title>
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
                        <li class="active"><a href="../index.php">Empresa</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Editar Página<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../filosofia.php">Filosofia</a></li>
                                <li><a href="../calidad.php">Calidad</a></li>

                                <li class="dropdown-submenu"><a href="#">Servicios</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="../pServicios.php">Página de Servicios</a></li>
                                        <li><a href="../ser_empresas.php">Empresas</a></li>
                                        <li><a href="../ser_cathering.php">Cathering</a></li>
                                        <li><a href="../ser_eventos.php">Eventos Especiales</a></li>
                                        <li><a href="../ser_hospitales.php">Hospitales</a></li>
                                    </ul>
                                </li>

                                <li><a href="../Productos.php">Productos</a></li>

                            </ul>
                        </li>

                        <li><a href="../Contactos.php">Ver Base de datos de los contactos</a></li>
                        <li><a href="../faq.php">Preguntas Frecuentes</a></li>
                    </ul>

                    <form action="" class="navbar-form navbar-right" role="search">
                        <a href="../../../index.html"><button type="button" class="btn btn-primary">
                                <label>Cerrar Sesión [Usuario]</label> <span class="glyphicon glyphicon-off"></span>
                            </button>
                        </a>
                    </form>
                </div>

            </div>
        </nav>
    </header>

    <body>
        <div class="row-fluid">
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <?php
                        $sql = "SELECT pagina.id_pagina, pagina.titulo, pagina.texto
                                FROM pagina
                                WHERE id_pagina = " . $texto;
                        $query = mysql_query($sql) or die(mysql_error());
                        $textos = mysql_fetch_array($query);
                        ?>
                        <form id="actualizacion" name="actualizacion" method="POST" action="textoEditado.php">
                            <table class='table table-hover' style='text-align:justify;'>
                                <tr>
                                    <td>
                                        <label>Jerarquía:</label>
                                    </td>
                                    <td>
                                        <label>Página y posición:</label>
                                    </td>
                                    <td>
                                        <label>Texto:<span style="color:red; font-size:20px;">(*)</span></label>
                                    </td>
                                    <td>...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" id="pagina" name="pagina" readonly value="<?php echo $textos['id_pagina']; ?>">
                                    </td>

                                    <td>
                                        <input type="text" id="Titulo" name="Titulo"  readonly value="<?php echo $textos['titulo']; ?>">
                                    </td>

                                    <td width="35%" height="auto">
                                        <textarea id="texto" name="texto" style="width:100%;height:350px;"><?php echo $textos['texto']; ?></textarea>
                                    </td>
                                    <td>
                                        <!--<input type="submit" class="btn btn-success" id="envian" name="envian" value="Actualizar" onclick="actuar();" >-->
                                        <input type="submit" class="btn btn-success" id="envian" name="envian" value="Actualizar">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <input type="hidden" id="nombretexto" name="nombretexto" value="<?php echo $textos; ?>">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <label><span style="color:red; font-size:20px;">(*)</span> Campo que se puede editar</label>
                    </section>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/myfunctions.js"></script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </body>
</html>