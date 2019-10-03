<?php

//$link = mysql_connect('ftp.ink247-importaciones.com.co', 'ink247im_fervil', 'Administrador.1');
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('no conectó: ' . mysql_error());
}
mysql_select_db('fervil', $link) or die('fallo la db.');
//mysql_select_db('ink247im_fervil', $link) or die('fallo la db.');
mysql_query("SET NAMES 'utf8'");

//mysql_close($link);

