<?php
include_once("conexion.php");

class Privilegios{

    public function privilegio(){
        $privilegios = Conexion::select("SELECT privilegio FROM privilegios");
        return $privilegios;
    }

    public function privilegiosUsuario($id){
        $privilegios = Conexion::select("SELECT p.privilegio, p.path FROM detalleusuario d, privilegios p WHERE d.idUsuario = $id AND p.idprivilegios = d.idprivilegios AND d.estado = 1");
        return $privilegios;
    }

    public function agregar($datos, $id){
        $i = 1;
        foreach ($datos as $value) {
            $estado = isset($value)? 1 : 0;
            $user = Conexion::query("INSERT INTO detalleusuario(idusuario, idprivilegios, estado) 
                                VALUES ($id, $i, $estado)");
            $i++;
        }
        return $user;
        
    }

    public function modificar($datos, $id){
        $i = 1;
        foreach ($datos as $value) {
            $estado = isset($value)? 1 : 0;
            $user = Conexion::query("UPDATE detalleusuario SET estado = $estado WHERE idusuario = $id AND idprivilegios = $i");
            $i++;
        }
        return $user;
        
    }


}

?>