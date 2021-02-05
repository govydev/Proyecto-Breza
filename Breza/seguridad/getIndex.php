<?php
include_once("../modelo/usuario.php");
include_once("../modelo/privilegios.php");
include_once("autenticacion.php");
include_once("principal.php");
session_start();

if(isset($_POST['login'])){
    $user = $_POST["txtUser"];
    $password = $_POST["txtPassword"];
    $usuario =  new Usuario;
    $respuesta = $usuario->autenticacion(trim($user), trim($password));
    if($respuesta[0] > 0){
        $carga = TRUE;
        $privilegios = new Privilegios();
        $path = $privilegios->privilegiosUsuario($respuesta[0]);
        $_SESSION['user'] = $respuesta;
        $_SESSION['acceso'] = true; 
        $_SESSION['privilegios'] = $path;
        $principal = new Principal();
        $principal->formPrincipal($path);
    }else{
        header("Location: ../index.php?msg=$respuesta");
    }
}elseif($_SESSION['acceso']){
    $privilegios = new Privilegios();
    $path = $privilegios->privilegiosUsuario($_SESSION['user'][0]);
    $principal = new Principal();
    $principal->formPrincipal($path);
}
else{
    header("Location: ../index.php");
}

?>