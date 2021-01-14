<?php
include_once("../modelo/usuario.php");
include_once("../modelo/privilegios.php");
include_once("autenticacion.php");
include_once("principal.php");
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');

if(isset($_POST['login'])){
    $user = $_POST["txtUser"];
    $password = $_POST["txtPassword"];
    $usuario =  new Usuario;
    $respuesta = $usuario->autenticacion(trim($user), trim($password));
    if($respuesta[0] > 0){
        $carga = TRUE;
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
}else{
    session_start();
    session_destroy();
    header("Location: ../index.php");
}

?>