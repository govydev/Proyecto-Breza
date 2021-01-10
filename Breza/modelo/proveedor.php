<?php
include_once("conexion.php");

class Proveedor{

    public function listaProveedores(){
        $lista = Conexion::select("SELECT * FROM proveedor");
        return $lista;
    }

    public function ProveedorId($id){
        $proveedor = Conexion::select("SELECT * FROM proveedor WHERE idproveedor = $id");
        return $proveedor[0]; 
    }

    public function modificar($id, $nombre, $ruc, $telefono, $correo, $direccion, $estado){
        $proveedor = Conexion::query("UPDATE proveedor SET Nombre = '$nombre', RUC = '$ruc', Telefono = '$telefono', Correo = '$correo', Direccion = $direccion, Estado = '$estado', WHERE idproveedor = $id");
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

    public function agregar($nombre, $ruc, $telefono, $correo, $direccion, $estado){
        $proveedor = Conexion::query("INSERT INTO mantemiento(Nombre, RUC, Telefono, Correo, Direccion, Estado) 
                                VALUES ('$nombre', '$ruc', '$telefono', '$correo', '$direccion', '$estado')");
        return $proveedor;
    }   
}

?>