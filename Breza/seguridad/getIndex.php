<?php
namespace App\seguridad;

include_once("facadeLogin.php");

header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');

if(isset($_POST['login'])){
    $user = $_POST["txtUser"];
    $password = $_POST["txtPassword"];
    $facadeLogin = new FacadeLogin;
    $facadeLogin->autenticacion($user, $password);
}else{
    session_start();
    session_destroy();
    header("Location: ../index.php");
}

?>