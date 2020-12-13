<?php
include_once("../modelo/usuario.php");
include_once("autenticacion.php");

$user = $_POST["txtUser"];
$password = $_POST["txtPassword"];
$usuario =  new Usuario;
$respuesta = $usuario->autenticacion(trim($user), trim($password));

if($respuesta[0] > 0){
    echo "Pagina prinvcipal";
    echo "<br>"; 
    print_r($usuario->usuarioId(1));
    echo "<br>"; 
    print_r($usuario->usuarios());
    echo "<br>"; 
    echo $usuario->agregar("marco", "Gutierrez", "Huamanttupa","Anker","12345", 1);
    echo "<br>"; 
    echo $usuario->modificar(3, "marco", "Gutierrez", "Huamanttupa","12345", 1);
    echo "<br>"; 
    echo $usuario->cambioEstado(3, 0);
    echo "<br>"; 
    //$usuario->eliminar(2);
}
else{
    $index = new Index();
    $index->formIndex($respuesta);
}

?>