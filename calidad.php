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
                <img src="<?php echo $imagenes[2]['ubicacion']; ?>"/>
            </div>



            <div id="contenido">
                <img src="<?php echo $imagenes[14]['ubicacion']; ?>" style="padding-top:2%;"/>


                <!--<div id="TextCalidad">-->
                <div  style="width:65%;float:right; text-align:justify;">
                    <p class="Texto6">
                        <br/><?php echo $contenido[15]['texto']; ?>
                        <br/><?php echo $contenido[16]['texto']; ?>

                    </p>


                    <p class="Texto7" > 

                        <img src="<?php echo $imagenes[9]['ubicacion']; ?>" width="3%"/><span><?php echo $contenido[17]['texto']; ?></span><br/>
                        <img src="<?php echo $imagenes[9]['ubicacion']; ?>" width="3%"/><span><?php echo $contenido[18]['texto']; ?></span><br/>
                        <img src="<?php echo $imagenes[9]['ubicacion']; ?>" width="3%"/><span><?php echo $contenido[19]['texto']; ?></span><br/>
                        <img src="<?php echo $imagenes[9]['ubicacion']; ?>" width="3%"/><span><?php echo $contenido[20]['texto']; ?></span><br/>
                        <img src="<?php echo $imagenes[9]['ubicacion']; ?>" width="3%"/><span><?php echo $contenido[21]['texto']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $contenido[22]['texto']; ?></span><br/>

                    </p>

                </div>

            </div>

       


            <!--Footer-->

            <div id="footer">

                <div id="contactenos" style="margin-top:0px;"></div>

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
