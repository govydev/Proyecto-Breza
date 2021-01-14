<?php
include_once("../modelo/maquinas.php");
include_once("../modelo/proveedor.php");
include_once("../modelo/calibracion.php");
include_once("./formNeoCalibracion.php");
include_once("./formCalibracion.php");
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');
print("entrada");
session_start();
if ($_SESSION["acceso"]) {
    print("paso de if");
    switch ($_POST['accion']){   
        case 'Nuevo':
            $maquina = new Maquinas();
            $proveedor = new Proveedor();
            $neoCalibracion = new neoCalibracion();
            $neoCalibracion->formNeoCalibracion("NUEVA", $proveedor->listar(), $maquina->listaMaquina());
            break;
        case 'Modificar':
            $id = trim($_POST["txtid"]);
            $maquina = new Maquinas();
            $proveedor = new Proveedor();
            $calibracion = new Calibracion();
            $neoCalibracion = new neoCalibracion();
            $neoCalibracion->formNeoCalibracion("MODIFICAR", $proveedor->listar(), $maquina->listaMaquina(), $calibracion->calibracionId($id));
            break;
        case 'Guardar':
            $certificado = trim($_POST["txtcertificado"]);
            $maquina = trim($_POST["optmaquina"]);
            $fecha = trim($_POST["txtfecha"]);
            $proveedor = trim($_POST["optproveedor"]);
            $estado = trim($_POST["optestado"]);
            switch ($_POST["registrar"]){
                case 'NUEVA':
                    $calibracion = new Calibracion();
                    $calibracion->agregar($fecha, $certificado, $estado, $maquina, $proveedor);
                    header('Location: getCalibracion.php');
                    break;
                case 'MODIFICAR':
                    $id = trim($_POST["txtid"]);
                    $calibracion = new Calibracion();
                    $calibracion->modificar($id, $fecha, $certificado, $estado, $maquina, $proveedor);
                    header('Location: getCalibracion.php');
                    break;
                default:
                    header('Location: getCalibracion.php');
                    break;
            }
        default:
            print("opcion default");
            $calibracion = new Calibracion();
            $gestionMaquinas = new gestionCalibracion();
            $gestionMaquinas->formGestionCalibracion($calibracion->listaCalibracion());
            break;
    }
}else{
    print("salida");
    header("Location: ../index.php");   
}



?>