<?php
include_once("../modelo/maquinas.php");
include_once("maquinas.php");

session_start();
$lista = new Maquinas();
if ($_SESSION["acceso"]) {
    switch ($_POST['accion']){
        case 'Listar':
            $maquinas = new gestionMaquinas();
            $maquinas->formGestionMaquinas($_SESSION["privilegios"], $lista->listaMaquina());
        case 'Nuevo':
            $maquinas = new NeoMaquinas();
            $maquinas->formNeoMaquinas("Nuevo");
        case 'Modificar':
            $maquinas = new neoMaquinas();
            $maquinas->formNeoMaquinas("Modificar");
    }
}else{
    header("Location: ../index.php");   
}



?>