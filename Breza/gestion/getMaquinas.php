<?php
include_once("../modelo/maquinas.php");
include_once("maquinas.php");

session_start();
if ($_SESSION["acceso"]) {
        $maquinas = new gestionMaquinas();
        $lista = new Maquinas();
        $maquinas->formGestionMaquinas($_SESSION["privilegios"], $lista->listaMaquina());
}else{
    header("Location: ../index.php");   
}



?>