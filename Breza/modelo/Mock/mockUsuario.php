<?php
namespace App\modelo\Mock;

use App\modelo\Usuario;

include_once('../Breza/modelo/usuario.php');

class MockUsuario extends Usuario{
    public function agregar($datos){
        return [
            "estado" => 1,
            "data" => $datos,
        ];        
    }
}
