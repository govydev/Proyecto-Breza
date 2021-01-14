<?php
include_once("../modelo/maquinas.php");
include_once("../modelo/marca.php");
include_once("neoMaquinas.php");
include_once("maquinas.php");
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');

session_start();
if ($_SESSION["acceso"]) {
    switch ($_POST['accion']){   
        case 'Nuevo':
            $maquinas = new Maquinas();
            $neoMaquinas = new neoMaquinas();
            $marcas = new Marca();
            $neoMaquinas->formNeoMaquinas("NUEVA", $marcas->listMarca());
            break;
        case 'Modificar':
            $id = trim($_POST["txtid"]);
            $maquinas = new Maquinas();
            $neoMaquinas = new neoMaquinas();
            $marcas = new Marca();
            $neoMaquinas->formNeoMaquinas("MODIFICAR", $marcas->listMarca(), $maquinas->maquinaId($id));
            break;
        case 'Guardar':
            // $datos = [trim($_POST["txtid"]), trim($_POST["txtcodigo"]), trim($_POST["txtnombre"]), trim($_POST["optmarca"]), trim($_POST["txtubicacion"]), trim($_POST["txtcantidad"]), trim($_POST["optestado"])];
            // print_r($datos);
            $codigo = trim($_POST["txtcodigo"]);
            $nombre = trim($_POST["txtnombre"]);
            $marca = trim($_POST["optmarca"]);
            $ubicacion = trim($_POST["txtubicacion"]);
            $cantidad = trim($_POST["txtcantidad"]);
            $estado = trim($_POST["optestado"]);
            switch ($_POST["registrar"]){
                case 'NUEVA':
                    $maquinas = new Maquinas();
                    $maquinas->agregar($codigo, $nombre, $ubicacion, $cantidad, $estado, $marca);
                    $lista = $maquinas->listaMaquina();
                    header('Location: getMaquinas.php');
                    break;
                case 'MODIFICAR':
                    $id = trim($_POST["txtid"]);
                    $maquinas = new Maquinas();
                    //print_r($datos);
                    $maquinas->modificar($id, $codigo, $nombre, $ubicacion, $cantidad, $estado, $marca);
                    header('Location: getMaquinas.php');
                    break;
                default:
                    header('Location: getMaquinas.php');
                    break;
            }
        default:
            $maquinas = new Maquinas();
            $gestionMaquinas = new gestionMaquinas();
            $gestionMaquinas->formGestionMaquinas($_SESSION["privilegios"], $maquinas->listaMaquina());
            break;
    }
}else{
    session_start();
    session_destroy();
    header("Location: ../index.php");  
}



?>