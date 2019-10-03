<?php

require_once ('consumir.php');

$model = new modeloPrueba();

$contenido = $model->getContenido();

$imagenes = $model->getImagenes();

$productos = $model->getProducts();

//echo "<pre>";
//print_r($productos =$model->getProducts()); 
//echo "</pre>";