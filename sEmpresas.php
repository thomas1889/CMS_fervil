<?php
require_once 'backend/Model/claseController.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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


                    <div id="logo"><img src="<?php echo $imagenes[0]['ubicacion']; ?>" width="100%"/></div>

                    <div id="menu2">

                        <ul class="ContMenu2">
                            <a href="servicios.php"><li class="item2">Servicios Prestados</li></a>
                            <a href="productos.php"><li class="item2">Productos Nuevos</li></a>
                            <a href="contacto.html"><li class="item1">Contáctenos</li></a>
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



            <!--Contenido-->

            <div id="filosofia">
                <img src="<?php echo $imagenes[33]['ubicacion']; ?>"/>
            </div>



            <div id="contenido">

                <div style="float: left; text-align: justify;width: 55%">
                    <img alt="" src="<?php echo $imagenes[27]['ubicacion']; ?>" width="150px" height="auto"/>
                    <p class="TextTitle" style="margin-top:-100px; margin-left: 150px;">
                        FERVIL EMPRESAS
                    </p>
                    <hr color="#26C9FF" size=1   width="75%" style="margin-bottom: 100px;"/>

                    <p class="Texto8">
                        <span><?php echo $contenido[23]['texto']; ?></span><br/>

                        <br/><span><?php echo $contenido[24]['texto']; ?></span><br/>

                        <br/><span><?php echo $contenido[25]['texto']; ?></span>

                    </p>
                </div>


                <div style="float: right; text-align: justify;width: 40%; margin-top:150px; margin-bottom: 100px;" >
                    <img src="<?php echo $imagenes[29]['ubicacion']; ?>"  width="100%" height="auto"/>
                </div>

            </div>
            <div style="clear:both;float:none;"></div>



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
