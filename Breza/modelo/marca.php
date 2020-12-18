<?php
include_once("conexion.php");

class Marca{
    public function listMarca(){
        $lista = Conexion::select("SELECT * FROM marca");
        return $lista;
    }
}