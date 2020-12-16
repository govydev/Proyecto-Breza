<?php
include_once("../modelo/usuario.php");
include_once("../modelo/privilegios.php");
include_once("formPrincipalUsuarios.php");
include_once("formUsuario.php");

session_start();
if ($_SESSION["acceso"]) {
    
    switch ($_POST['accion']) {
        case 'Nuevo':
            $privilegio = new Privilegios();
            $formUsuario = new formUsuario();
            $formUsuario -> formUsuarios($privilegios =  $privilegio->privilegio(), $tipo = "NUEVO");
            break;

        case 'Guardar':
            $datos = [trim($_POST["txtNombre"]), trim($_POST["txtPaterno"]), trim($_POST["txtMaterno"]), trim($_POST["txtUsuario"]), trim($_POST["txtPassword"])];
            $privilegiosUsuario = [$_POST["privilegio1"],$_POST["privilegio2"],$_POST["privilegio3"],$_POST["privilegio4"],$_POST["privilegio5"]];
            switch ($_POST["registrar"]) {
                case 'NUEVO':
                    $usuario= new Usuario();
                    $privilegios = new Privilegios();
                    $id =  $usuario->agregar($datos);
                    if($id > 0)    $privilegios->agregar($privilegiosUsuario, $id);
                    
                    break;
                
                default:
                    # code...
                    break;
            }
            break;
        
        default:
            $usuario= new Usuario();
            $formUsuario = new principalUsuario();
            $formUsuario->formGestionUsuario($_SESSION["privilegios"], $usuario->usuarios());
            break;
    }

}else{
    header("Location: ../index.php");   
}



?>