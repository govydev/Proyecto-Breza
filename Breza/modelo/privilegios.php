<?php
include_once("conexion.php");

class Privilegios{

    public function privilegio($id){
        $privilegios = Conexion::select("SELECT privilegio FROM privilegios");
        return $privilegios;
    }

    public function privilegiosUsuario($id){
        $privilegios = Conexion::select("SELECT p.privilegio, p.path FROM detalleusuarios d, privilegios p WHERE d.idUsuario = $id AND p.idprivilegio = d.idPrivilegio AND d.estado = 1");
        return $privilegios;
    }

}

?>