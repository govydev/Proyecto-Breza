<?php
include_once("../modelo/maquinas.php");
include_once("../modelo/proveedor.php");
include_once("../modelo/calibracion.php");
include_once("formNeoCalibracion.php");
include_once("formCalibracion.php");
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');


session_start();
if ($_SESSION["acceso"]) {
    switch ($_POST['accion']){   
        case 'Nuevo':
            $maquina = new Maquinas();
            $proveedor = new Proveedor();
            $neoCalibracion = new neoCalibracion();
            $neoCalibracion->formNeoCalibracion("NUEVA", $proveedor->listaProveedores(), $maquina->listaMaquina());
            break;
        case 'Modificar':
            $id = trim($_POST["txtid"]);
            $maquina = new Maquinas();
            $proveedor = new Proveedor();
            $calibracion = new Calibracion();
            $neoCalibracion = new neoCalibracion();
            $neoCalibracion->formNeoCalibracion("MODIFICAR", $proveedor->listaProveedores(), $maquina->listaMaquina(), $calibracion->calibracionId($id));
            break;
        case 'Guardar':
            // $datos = [trim($_POST["txtid"]), trim($_POST["txtcodigo"]), trim($_POST["txtnombre"]), trim($_POST["optmarca"]), trim($_POST["txtubicacion"]), trim($_POST["txtcantidad"]), trim($_POST["optestado"])];
            // print_r($datos);
            $certificado = trim($_POST["txtcertificado"]);
            $maquina = trim($_POST["optmaquina"]);
            $fecha = trim($_POST["txtfecha"]);
            $proveedor = trim($_POST["optproveedor"]);
            $estado = trim($_POST["optestado"]);
            switch ($_POST["registrar"]){
                case 'NUEVA':
                    $calibracion = new Calibracion();
                    $calibracion->agregar($fecha, $certificado, $estado, $maquina, $proveedor);
                    $lista = $calibracion->listaCalibracion();
                    header('Location: getCalibracion.php');
                    break;
                case 'MODIFICAR':
                    $id = trim($_POST["txtid"]);
                    $maquinas = new Maquinas();
                    $maquinas->modificar($id, $fecha, $certificado, $estado, $maquina, $proveedor);
                    header('Location: getCalibracion.php');
                    break;
                default:
                    header('Location: getCalibracion.php');
                    break;
            }
        default:
            $calibracion = new Calibracion();
            $gestionMaquinas = new gestionCalibracion();
            $gestionMaquinas->formGestionCalibracion($_SESSION["privilegios"], $calibracion->listaCalibracion());
            break;
    }
}else{
    header("Location: ../index.php");   
}



?>