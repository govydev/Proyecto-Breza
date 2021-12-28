<?php
namespace App\modelo;
include_once("conexion.php");

class Proveedor{

    public function listar(){
        $lista = Conexion::select("SELECT * FROM proveedor");
        return $lista;
    }

    public function buscar($id){
        $proveedor = Conexion::select("SELECT * FROM proveedor WHERE idproveedor = $id");
        return $proveedor[0]; 
    }

    public function editar($id, $datos){
        $proveedor = Conexion::query("UPDATE proveedor SET Nombre = '$datos[0]', RUC = '$datos[1]', Telefono = '$datos[2]', Correo = '$datos[3]', Direccion = '$datos[4]', Estado = '$datos[5]' WHERE idproveedor = $id");
        return $proveedor;
    }

    public function cambioEstado($id, $estado){
        $proveedor = Conexion::query("UPDATE proveedor SET Estado = $estado WHERE idproveedor = $id");
        return $proveedor;
    }

    public function eliminar($id){
        $proveedor = Conexion::query("DELETE FROM proveedor WHERE idproveedor = $id");
        return $proveedor;
    }

    public function agregar($datos){
        $proveedor = Conexion::query("INSERT INTO proveedor(Nombre, RUC, Telefono, Correo, Direccion, Estado) 
                VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]')");
        return $proveedor;
    }   
}

?>