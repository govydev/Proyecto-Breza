<?php
include_once("conexion.php");

class Usuario{

    public function autenticacion($txtUser, $txtPass){
        $con =  Conexion::getConexion();
        $user = $con->query("SELECT usuario FROM `usuarios` WHERE login = '$txtUser' and estado = 1");
        if(count($user) > 0 && $user['estado'] == 1){
            if($txtPass == $user['password']){
                return $user;
            }
            else{
                return "El contraseña ingresada no es valida.";
            }
        }
        else{
            return "El usuario no se encuentra habilidato o no esta registrado.";
        }
    }

}

?>