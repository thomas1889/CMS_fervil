<?php
require_once 'backend/Model/claseController.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta content="" name="keywords">
        <title>Fervil</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css" />


        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'/>

        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'/>

    </head>

    <body>
        <div id="contenedor">

            <!--Cabezote-->

            <div id="cabezote">
                <div id="franja"></div>
                <div id="ContMenu">
                    <div id="menu1">

                        <ul class="ContMenu1">

                            <a href="index.php"><li class="item2">Objeto de la empresa</li></a>
                            <a href="filosofia.php"><li class="item1">Filosofía</li></a>
                            <a href="calidad.php"><li class="item1">Calidad</li></a>
                        </ul>
                    </div>


                    <div id="logo"><img src="<?php echo $imagenes[0]['ubicacion']; ?>" width="100%"></div>

                    <div id="menu2">

                        <ul class="ContMenu2">
                            <a href="servicios.php"><li class="item2">Servicios Prestados</li></a>
                            <a href="productos.php"><li class="item2">Productos Nuevos</li></a>
                            <a href="contacto.php"><li class="item1">Contáctenos</li></a>
                        </ul>

                    </div>
                </div>
            </div>


            <!--Fin_Cabezote-->

            <!--Banner-->

            <div id="banner">
                <ul class="ContBanner">
                    <li class="servicios"><a href="servicios.php"><img src="<?php echo $imagenes[28]['ubicacion']; ?>" /></a></li>
                    <li class="productos"><a href="productos.php"><img src="<?php echo $imagenes[22]['ubicacion']; ?>" /></a></li>
                </ul>
            </div>

            <!--Fin_Banner-->

            <div id="contenido">
                <!--Contenido-->


                <div id="ConCont">


                    <div id="ConCont1">

                        <div id="objeto"><img src="<?php echo $imagenes[21]['ubicacion']; ?>" width="100%"/> </div>

                        <p class="texto1" style="text-align:justify;">
                            <br/><?php echo $contenido[0]['texto']; ?><br>
                            <br/><?php echo $contenido[1]['texto']; ?>
                        </p>

                        <div id="imagenn1"><img src="<?php echo $imagenes[12]['ubicacion']; ?>" width="100%"/></div>

                    </div>

                    <!---->


                    <div id="ConCont3"><img src="images/lineapuntos.fw.png"  width="45%" style="margin-left:10px"/></div>


                    <div id="ConCont2">
                        <p class="texto2" style="text-align:justify;width:75%;height: auto; ">
                            <?php echo $contenido[2]['texto']; ?>
                        </p>

                        <p class="texto4">
                            <font color="#4CA5FF"><br/> 1. </font> <?php echo $contenido[3]['texto']; ?>
                            <font color="#4CA5FF"> <br/> 2. </font> <?php echo $contenido[4]['texto']; ?>
                            <font color="#4CA5FF"> <br/> 3.  </font><?php echo $contenido[5]['texto']; ?>
                            <font color="#4CA5FF"><br/> 4.  </font><?php echo $contenido[6]['texto']; ?>
                            <font color="#4CA5FF"> <br/> 5.  </font><?php echo $contenido[7]['texto']; ?>

                        </p>
                    </div>


                </div>

                <!---->
            </div>








            <!--Footer-->

            <div id="footer">

                <div id="contactenos"></div>

                <div id="fervil">

                    <div id="logo1"><img src="<?php echo $imagenes[0]['ubicacion']; ?>" width="100%"/></div>
                    <div id="info">
                        <p class="texto3">
                            | Calle 145 No 7c - 21(604) Bogotá D.C |  Teléfonos 3108599674  -  6255290 |
                            <br/>  Email  info@fervil.co
                            <br/>  Desarrollado por  <a href="http://www.conjuntodigital.com"> <font color="orange">CONJUNTO DIGITAL</font> </a>
                        </p>
                    </div>

                </div>
            </div>


            <!--Fin_Footer-->


        </div>
    </body>
</html>
