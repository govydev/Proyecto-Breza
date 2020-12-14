<?php
include_once("conexion.php");

class Usuario{

    public function autenticacion($txtUser, $txtPass){
        $user = Conexion::select("SELECT * FROM usuarios WHERE usuario = '$txtUser' and estado = 1");
        if($user[0][6] == 1){
            return $txtPass == $user[0][5] ? $user[0] : "La contraseña ingresada no es valida.";
        }
        else{
            return "El usuario no se encuentra habilitado o no esta registrado.";
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

    public function agregar($nombre, $apPaterno, $apMaterno, $user, $password, $estado){
        $user = Conexion::query("INSERT INTO usuarios(nombre, apPaterno, apMaterno, usuario, `password`, estado) 
                                VALUES ('$nombre', '$apPaterno', '$apMaterno', '$user', '$password', $estado)");
        return $user;
    }

    

}
$usuario =  new Usuario;
$respuesta = $usuario->autenticacion("root", "root");;

?>