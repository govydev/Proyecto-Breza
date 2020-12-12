<?php
include_once("../modelo/usuario.php");
include_once("autenticacion.php");

$user = $_POST["txtUser"];
$password = $_POST["txtPassword"];
$usuario =  new Usuario();
$respuesta = $usuario->autenticacion($user, $password);

if(gettype($respueta)== "array"){

}
else{
    $index = new Index();
    $index->formIndex($respuesta);
}

?>