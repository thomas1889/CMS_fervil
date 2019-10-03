<?php
require_once 'backend/Model/claseController.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Fervil</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/styles.css"/>


        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>



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


                    <div id="logo"><img src="images/logo.png" width="100%"/></div>

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
                    <li class="servicios"><a href="servicios.html"><img src="images/servicios.png" /></a></li>
                    <li class="productos"><a href="productos.html"><img src="images/productos.png" /></a></li>
                </ul>
            </div> 

            <!--Fin_Banner-->

            <!--Contenido--> 

            <div id="filosofia">
                <img src="images/productosnuevos.png"/>
            </div>

            <div id="slider">
                <div id="w">
                    <h1 class="cont1" style="padding-left: 5%;font-size: 40px;">Próximamente aquí, nuevos productos.</h1>

                    <nav class="slidernav">
                        <div id="navbtns" class="clearfix">
                            <a href="#" class="previous"> < </a>
                            <a href="#" class="next"> > </a>
                        </div>
                    </nav>

                    <div class="crsl-items" data-navigation="navbtns">
                        <div class="crsl-wrap">
                            <div class="crsl-item">
                                <div class="thumbnail">

                                    <img src="<?php echo $productos[0]['ubicacion']; ?>" alt="nyc subway">
                                        <span class="postdate"><?php echo $productos[0]['fecha']; ?></span>
                                </div>

                                <h3><a href="#">Lorem Ipsum </a></h3>

                                <p><?php echo $productos[0]['texto']; ?></p>


                            </div>

                            <div class="crsl-item">
                                <div class="thumbnail">
                                    <img src="<?php echo $productos[1]['ubicacion']; ?>" alt="danny antonucci">
                                        <span class="postdate"><?php echo $productos[1]['fecha']; ?></span>
                                </div>

                                <h3><a href="#">Lorem Ipsum </a></h3>

                                <p>Vestibulum in venenatis velit. Praesent commodo eget purus sed interdum. Curabitur faucibus purus ut erat fermentum posuere. Suspendisse blandit viverra sagittis. Nullam cursus scelerisque lorem ut ornare.</p>


                            </div>

                            <div class="crsl-item">
                                <div class="thumbnail">
                                    <img src="<?php echo $productos[2]['ubicacion']; ?>" alt="watercolor paints"/>
                                        <span class="postdate"><?php echo $productos[2]['fecha']; ?></span>
                                </div>

                                <h3><a href="#">Lorem Ipsum </a></h3>

                                <p><?php echo $productos[1]['texto']; ?></p>


                            </div>

                            <div class="crsl-item">
                                <div class="thumbnail">
                                    <img src="img/productos.fw.png" alt="apple ipod classic photo"/>
                                        <span class="postdate">Dic 02, 2014</span>
                                </div>

                                <h3><a href="#">Lorem Ipsum </a></h3>

                                <p><?php echo $productos[0]['texto']; ?></p>


                            </div>

                            <!--                            <div class="crsl-item">
                                                            <div class="thumbnail">
                                                                <img src="img/productos.fw.png" alt="web design magazines"/>
                                                                    <span class="postdate">Dic 11, 2014</span>
                                                            </div>
                            
                                                            <h3><a href="#">Lorem Ipsum </a></h3>
                            
                                                            <p>Morbi quis tempus leo, eget vestibulum quam. Pellentesque ac orci urna. Proin vitae neque vel metus pulvinar luctus vitae eu nulla.</p>
                            
                            
                                                        </div>-->
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <script type="text/javascript">
            $(function () {
                $('.crsl-items').carousel({
                    visible: 3,
                    itemMinWidth: 180,
                    itemEqualHeight: 370,
                    itemMargin: 9,
                });

                $("a[href=#]").on('click', function (e) {
                    e.preventDefault();
                });
            });
        </script>  



        <!--Fin_Contenido-->     


        <!--Footer--> 

        <div id="footer" style="margin-top: 250px;">

            <div id="contactenos"></div>

            <div id="fervil">

                <div id="logo1"><img src="images/logo.png" width="100%"/></div>
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


    </body>
</html>
