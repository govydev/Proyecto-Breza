<?php
include_once("conexion.php");

class Privilegios{

    public function privilegiosUsuario($id){
        $privilegios = Conexion::select("SELECT p.privilegio, p.path FROM detalleusuarios d, privilegios p 
                                         WHERE idUsuario = $id AND p.idprivilegio = d.idPrivilegios AND d.estado = 1");
        return $privilegios;
    }

}

?>