<?php
namespace App\gestion;

use App\modelo\Proveedor;

include_once("../modelo/proveedor.php");
include_once("neoProveedor.php");
include_once("proveedor.php");
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');

if(isset($_POST['accion'])){

}else{
    $_POST['accion'] = "";
}

session_start();
if ($_SESSION["acceso"]) {
    switch ($_POST['accion']){
        case 'Nuevo':
            $formProveedor = new formNP;
            $formProveedor->formNPShow("NUEVO");
            break;
        case 'Editar':
            $objProveedor = new Proveedor;
            $formProveedor = new formNP;
            $proveedor = $objProveedor -> buscar($_POST["id"]);
            $formProveedor->formNPShow("MODIFICAR", $proveedor);
            break;
        case 'Guardar':
            $objProveedor = new proveedor;
            switch ($_POST["registrar"]){
                case 'NUEVO':
                    $datos = [trim($_POST["txtNombre"]),trim($_POST["txtRuc"]),trim($_POST["txtTelefono"]),
                    trim($_POST["txtCorreo"]),trim($_POST["txtDireccion"]),trim($_POST["txtEstado"])];
                    $objProveedor->agregar($datos);
                    header('Location: getProveedor.php');
                    break;
                case 'MODIFICAR':
                    $id = trim($_POST["txtId"]);
                    $datos = [trim($_POST["txtNombre"]),trim($_POST["txtRuc"]),trim($_POST["txtTelefono"]),
                    trim($_POST["txtCorreo"]),trim($_POST["txtDireccion"]),trim($_POST["txtEstado"])];
                    $objProveedor->editar($id, $datos);
                    header('Location: getProveedor.php');
                    break;
                default:
                    header('Location: getProveedor.php');
                    break;
            }
        default:
            $formProveedor = new formProveedor;
            $objProveedor = new proveedor;
            $lista = $objProveedor -> listar();
            $formProveedor->formProveedorShow($_SESSION["privilegios"], $lista);
            break;
    }
}else{
    header("Location: ../index.php");
}