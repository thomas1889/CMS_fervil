<?php

class conexion {
    
    private $db_host='localhost';
    private $db_user='root';
    private $db_password='';
    private $db_name='fervil';
    private $connection;

    public function __construct(){
        $this->connection=$this->conectar();
    }


    public static function conectar(){

        $connection=mysqli_connect($db_host, $db_user, $db_password, $db_name);
        if(mysqli_connect_errno()){
            echo 'no se pudo conectar'.mysqli_connect_error(); 
        }

    }
}
    
