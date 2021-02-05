<?php
include_once("../modelo/usuario.php");
if(!isset($_POST["id"])){
    if($_POST["txtUsuario"] != null){
        $usuario= new Usuario();
        $res = $usuario->usuarioExiste($_POST["txtUsuario"]);
        if($res[0] == 1){
            echo "<label style='color: red' id='res'>Usuario ya existente</label>";
        }
    }
}


?>