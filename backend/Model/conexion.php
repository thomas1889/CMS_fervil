<?php

class Conexion {

    private $db;

    public function __construct() {
        $this->db = $this->conectar();
    }

    public static function conectar() {

        //date_default_timezone_set("America/Mexico_City");
//        $link = mysql_connect('localhost', 'fervil_admin', 'Administrador.1');
        $link = mysql_connect('localhost', 'root', 'mysql');
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db('fervil') or die('fallo la db.');
//        mysql_select_db('fervil_data') or die('fallo la db.');
        //mysql_set_charset('utf8', $link);
        return $link;
    }

    public function query($sql) {
        return mysql_query($sql, $this->db);
    }

    public function fetch($query) {
        return mysql_fetch_assoc($query);
    }
}
