<?php
session_start();
session_unset();
session_destroy();
setcookie("PHPSESSID","x",time()-350); //Eliminar Cookies
header('Location:index.php?accion=salir');
exit();
?>