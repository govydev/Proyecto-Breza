<?php
include_once("conexion.php");

class Usuario{

    public function autenticacion($txtUser, $txtPass){
        $user = Conexion::select("SELECT * FROM usuarios WHERE usuario = '$txtUser' and estado = 1");
        if($user[0][6] == 1){
            return $txtPass == $user[0][5] ? $user[0] : 1;
        }
        else{
            return 0;
        }
    }

    public function usuarioId($id){
        $user = Conexion::select("SELECT * FROM usuarios WHERE idUsuario = $id");
        return $user[0];
    }

    public function usuarios(){
        $user = Conexion::select("SELECT * FROM usuarios");
        return $user;
    }

    public function modificar($id, $nombre, $apPaterno, $apMaterno, $password, $estado){
        $user = Conexion::query("UPDATE usuarios SET nombre = '$nombre', apPaterno = '$apPaterno', apMaterno = '$apMaterno', `password` = '$password', estado = $estado WHERE idUsuario = $id");
        return $user;
    }

    public function cambioEstado($id, $estado){
        $user = Conexion::query("UPDATE usuarios SET estado = $estado WHERE idUsuario = $id");
        return $user;
    }

    public function eliminar($id){
        $user = Conexion::query("DELETE FROM usuarios WHERE idUsuario = $id");
        return $user;
    }

    public function agregar($datos){
        $user = Conexion::query("INSERT INTO usuarios(nombre, apPaterno, apMaterno, usuario, `password`, estado) 
                                VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', 1)", 1);
        return $user;
    }

}

?>