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

    public function modificar($datos, $id){
        $user = Conexion::query("UPDATE usuarios SET nombre = '$datos[0]', apPaterno = '$datos[1]', apMaterno = '$datos[2]', usuario = '$datos[3]',`password` = '$datos[4]', estado = $datos[5] WHERE idUsuario = $id");
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

    public function usuarioExiste($nombre){
        $user = Conexion::select("SELECT COUNT(*) FROM usuarios WHERE usuario='$nombre'");
        return $user[0];
    }
}

?>