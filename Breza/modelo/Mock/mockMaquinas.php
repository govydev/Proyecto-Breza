<?php
namespace App\modelo\Mock;

use App\modelo\Maquinas;

include_once('../Breza/modelo/maquinas.php');

class MockMaquinas extends Maquinas{
    public function agregar($codigo, $nombre, $ubicacion, $cantidad, $estado, $idmarca){
        return [
            "estado" => 1,
            "data" => [
                "codigo" => $codigo,
                "nombre" => $nombre,
                "ubicacion" => $ubicacion,
                "cantidad" => $cantidad,
                "estado" => $estado,
                "idmarca" => $idmarca,
            ],
        ];        
    }
}