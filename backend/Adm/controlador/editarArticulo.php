<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:../logout.php");
}
include ("../controlador/conexion.php");
$id_art = $_POST['id_art'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../../Assets/Img/favicon.ico">
        <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Satisfy'/>
        <script type="text/javascript" src="../../../Assets/js/jquery11.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/myfunctions.js"></script>
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

                                <li><a href="../articulos.php">Artículos</a></li>
                                <li><a href="../Clientes.php">Clientes</a></li>

                            </ul>
                        </li>

                        <li><a href="#">Preguntas Frecuentes</a></li>
                    </ul>
                    </ul>

                    <form action="" class="navbar-form navbar-right" role="search">

                        <button type="submit" class="btn btn-primary">
                            <label>Cerrar Sesión [Usuario]</label> <span class="glyphicon glyphicon-off"></span>
                        </button> 
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
                        $sql = "SELECT id_art, titulo, preview, cabezote, fecha, archivo
                                FROM articulos
                                WHERE articulos.id_art =" . $id_art;
                        $query = mysql_query($sql) or die(mysql_error());
                        $articulo = mysql_fetch_array($query);
                        ?>
                        <form id="actualizacion" name="actualizacion" method="POST" action="articuloEditado.php">
                            <table class='table table-hover' style='text-align:justify;'>
                                <tr>
                                    <td>
                                        <label>Jerarquía:</label>
                                    </td>
                                    <td>
                                        <label>Número del Artículo:</label>
                                    </td>
                                    <td>
                                        <label>Titulo:</label>
                                    </td>
                                    <td>
                                        <label>Texto Inicial del Artículo :<span style="color:red; font-size:20px;">(*)</span></label>
                                    </td>
                                    <td>
                                        <label>Fecha:</label>
                                    </td>
                                    <td>
                                        <label>Nombre del Archivo PDF:</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" id="idArt" name="idArt" value="<?php echo $articulo['id_art']; ?>" readonly>
                                    </td>

                                    <td>
                                        <input type="text" id="titulo" name="titulo" value="<?php echo $articulo['titulo']; ?>" readonly>
                                    </td>

                                    <td width="35%" height="auto">
                                        <textarea id="textoPreview" name="textoPreview" style="width:100%;height:120px;"><?php echo $articulo['preview'] ?></textarea>
                                    </td>
                                    <td width="35%" height="auto">
                                        <textarea id="cabezote" name="cabezote" style="width:100%;height:120px;"><?php echo $articulo['cabezote'] ?></textarea>
                                    </td>

                                    <td>
                                        <input type="text" id="fecha" name="fecha"  value="<?php echo $articulo['fecha']; ?>" readonly>
                                    </td>     
                                    <td>
                                        <textarea id="archivo" name="archivo" placeholder="archivo.pdf" ><?php echo $articulo['archivo']; ?></textarea>
                                    </td>     

                                    <td>
                                        <input type="submit" class="btn btn-success" id="envian" name="envian" value="Actualizar" onclick="actuar();" >
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <input type="hidden" id="nombretexto" name="nombretexto" value="<?php echo $articulo; ?>">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <?php
        /*
          }
          else {
          return false;
          }
         */
        ?>
    </body>
</html>
