<?php
include_once("../modelo/usuario.php");
include_once("../modelo/privilegios.php");
include_once("autenticacion.php");
include_once("principal.php");

$user = $_POST["txtUser"];
$password = $_POST["txtPassword"];
$usuario =  new Usuario;
$respuesta = $usuario->autenticacion(trim($user), trim($password));

if(isset($_POST['login'])){
    if($respuesta[0] > 0){
        $carga = TRUE;
        $privilegios = new privilegios();
        $path = $privilegios->privilegiosUsuario($respuesta[0]);
        if($carga){
            session_start();
            $_SESSION['user'] = $respuesta;
            $_SESSION['acceso'] = true; 
            $_SESSION['privilegios'] = $path;
            $carga = FALSE;
        }
        $principal = new Principal();
        $principal->formPrincipal($path);
    }else{
        header("Location: ../index.php?msg=$respuesta");
    }
}else{
    header("Location: ../index.php");
}

?>