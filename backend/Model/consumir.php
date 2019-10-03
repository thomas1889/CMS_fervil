<?php

require_once ('conexion.php');

class modeloPrueba {

    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    public function getContenido() {
        $sql = "
        SELECT pagina.id_pagina, pagina.texto
        FROM pagina
        WHERE texto IS NOT NULL";

        $query = $this->db->query($sql);
        $array = array();
        while ($rows = $this->db->fetch($query)) {
            $array[] = $rows;
        }
        return $array;
    }

    public function getImagenes() {
        $sql = "
            SELECT id_imagen, nombre, ubicacion
            FROM imagen
            WHERE ubicacion IS NOT NULL";

        $query = $this->db->query($sql);
        $arrayImg = array();
        while ($rows = $this->db->fetch($query)) {
            $arrayImg [] = $rows;
        }
        return $arrayImg;
    }

    public function getProducts() {
        $sql = "SELECT pagina.id_pagina, pagina.id_imagen, pagina.texto, pagina.fecha, imagen.ubicacion
                FROM pagina
                INNER JOIN imagen ON pagina.id_imagen = imagen.id_imagen
                WHERE titulo LIKE 'producto%' AND
                                (pagina.id_imagen IS NOT NULL AND texto IS NOT NULL)
                ORDER BY id_pagina DESC";

        $query = $this->db->query($sql);
        $arrayPro = array();
        while ($rows = $this->db->fetch($query)) {
            $arrayPro[] = $rows;
        }
        return $arrayPro;
    }

}
