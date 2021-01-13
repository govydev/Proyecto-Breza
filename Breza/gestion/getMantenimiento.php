<?php 
include_once("formPrincipalMantenimiento.php");
include_once("formMantenimiento.php");
include_once("../modelo/mantenimiento.php");
include_once("../modelo/proveedor.php");
include_once("../modelo/maquinas.php");
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');

session_start();
if ($_SESSION["acceso"]) {
    switch ($_POST['accion']) {
        case 'Nuevo':
            $proveedor = new Proveedor();
            $maquinas = new Maquinas();
            $formMantenimiento = new formMantenimiento();
            $listaMaquina =  $maquinas->listaMaquina();
            $listaProveedor = $proveedor->listaProveedores();
            $formMantenimiento-> formMantenimientos("NUEVO", null, $listaMaquina, $listaProveedor);
            break;

        case 'Editar':
            $datos = new Mantenimiento();
            $proveedor = new Proveedor();
            $maquinas = new Maquinas();
            $formMantenimiento = new formMantenimiento();
            $detalle = $datos->MantenimientoId($_POST['id']);
            $listaMaquina =  $maquinas->listaMaquina();
            $listaProveedor = $proveedor->listaProveedores();
            $formMantenimiento-> formMantenimientos("EDITAR", $detalle, $listaMaquina, $listaProveedor);
            break;

        case 'Guardar':
            $datos = [$_POST["txtMotivo"], $_POST["txtFecha"], $_POST["nbFactura"], $_POST["txtObservacion"], $_POST["ddEstado"], $_POST["ddMaquina"], $_POST["ddProveedor"]];
            $mantenimiento = new Mantenimiento();
            switch ($_POST["registrar"]) {
                case 'NUEVO':
                    $mantenimiento->agregar($datos);
                    break;
                case 'EDITAR':
                    echo $mantenimiento->modificar($datos,$_POST["id"]);
                    break;
            }
            header("Location: getMantenimiento.php"); 
            break;
        
        default:
            $lista = new Mantenimiento();
            $formMantenimiento = new principalMantenimiento();
            $formMantenimiento->formPrincipalMantenimiento($lista->listaMantenimientos()); 
            break;
    }

}else{
    header("Location: ../index.php");   
}



?>