<?php 
include_once("../modelo/usuario.php");
include_once("../modelo/privilegios.php");
include_once("principal.php");
class FacadeLogin{
    public function autenticacion($user, $password){
        $usuario = new Usuario();
        $respuesta = $usuario->autenticacion(trim($user), trim($password));
        if($respuesta[0] > 0){
            $privilegios = new Privilegios();
            $path = $privilegios->privilegiosUsuario($respuesta[0]);
            session_start();
            $_SESSION['user'] = $respuesta;
            $_SESSION['acceso'] = true; 
            $_SESSION['privilegios'] = $path;
            $principal = new Principal();
            $principal->formPrincipal($path);
        }else{
            header("Location: ../index.php?msg=$respuesta");
        }
    }
}
    
?>