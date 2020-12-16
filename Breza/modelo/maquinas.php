<?php
include_once("conexion.php");

class Maquinas{

    public function listaMaquina(){
        $lista = Conexion::select("SELECT m.idmaquina, m.codigo, m.nombre, mr.nombre, m.ubicacion, m.cantidad, m.estado
                                FROM maquinas m, marca mr WHERE m.idmarca = mr.idmarca");
        return $lista;
    }

}

?>