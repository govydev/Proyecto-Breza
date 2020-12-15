<?php
include_once("../modelo/usuario.php");
include_once("usuarios.php");

session_start();
if ($_SESSION["acceso"]) {
    switch ($_POST['accion']) {
        case 'Nuevo':
            
            break;
        
        default:
            $usuario = new gestionUsuario();
            $lista = new Usuario();
            $usuario->formGestionUsuario($_SESSION["privilegios"], $lista->usuarios());
            break;
    }
}else{
    header("Location: ../index.php");   
}



?>