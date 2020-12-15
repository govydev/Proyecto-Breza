<?php
include_once("conexion.php");

class Privilegios{

    public function privilegio($id){
        $privilegios = Conexion::select("SELECT privilegio FROM privilegios");
        return $privilegios;
    }

    public function privilegiosUsuario($id){
        $privilegios = Conexion::select("SELECT p.privilegio, p.path FROM detalleusuario d, privilegios p WHERE d.idUsuario = $id AND p.idprivilegios = d.idPrivilegios AND d.estado = 1");
        return $privilegios;
    }

}

?>