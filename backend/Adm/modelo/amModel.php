<?php

require_once ('controlador/conexion.php');


class modeloPrueba {

    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    public function getContenido() {
        $sql = "
        SELECT id_texto,
               titulo,
               tipo,
               contenido
        FROM texto
        WHERE TRUE ";

        $query = $this->db->query($sql);
        $array = array();
        while ($rows = $this->db->fetch($query)) {
            $array[] = $rows;
        }
        return $array;
    }

    public function getImagenes() {
        $sql = "
            SELECT 
                id_imagen,
                nombre, 
                ubicacion
            FROM imagen
            WHERE TRUE";

        $query = $this->db->query($sql);
        $arrayImg = array();
        while ($rows = $this->db->fetch($query)) {
            $arrayImg [] = $rows;
        }
        return $arrayImg;
    }

}
