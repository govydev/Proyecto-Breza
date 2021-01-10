<?php
include_once("conexion.php");

class Mantenimiento{

    public function listaMantenimientos(){
        $lista = Conexion::select("SELECT mn.idmantenimiento, mn.Factura, mn.Fecha, mq.Nombre Maquina, p.Nombre Proveedor, mn.Motivo, mn.Observacion, mn.Estado 
                                    FROM mantenimiento mn, maquinas mq, proveedor p
                                    WHERE mn.idmaquina = mq.idmaquina AND 
                                    mn.idproveedor = p.idproveedor ORDER BY mn.Fecha DESC");
        return $lista;
    }

    public function MantenimientoId($id){
        $maquina = Conexion::select("SELECT mn.idmantenimiento, mn.Factura, mn.Fecha, mq.Nombre Maquina, p.Nombre Proveedor, mn.Motivo, mn.Observacion, mn.Estado 
                                        FROM mantenimiento mn, maquinas mq, proveedor p 
                                        WHERE mn.idmaquina = mq.idmaquina AND 
                                        mn.idproveedor = p.idproveedor AND mn.idmantenimiento = $id");
        return $mantenimiento[0]; 
    }

    public function modificar($id, $motivo, $fecha, $factura, $observacion, $estado, $idmaquina, $idproveedor){
        $maquina = Conexion::query("UPDATE mantenimiento SET Motivo = '$motivo', Fecha = '$fecha', Factura = '$factura', Observacion = '$observacion', Estado = $estado, idmaquina = '$idmaquina', idproveedor = '$idproveedor' WHERE idmantenimiento = $id");
        return $mantenimiento;
    }

    public function cambioEstado($id, $estado){
        $maquina = Conexion::query("UPDATE mantenimiento SET Estado = $estado WHERE idmantenimiento = $id");
        return $mantenimiento;
    }

    public function eliminar($id){
        $maquina = Conexion::query("DELETE FROM mantenimiento WHERE idmantenimiento = $id");
        return $mantenimiento;
    }

    public function agregar($motivo, $fecha, $factura, $observacion, $estado, $idmaquina, $idproveedor){
        $maquina = Conexion::query("INSERT INTO mantemiento(Motivo, Fecha, Factura, Observacion, Estado, idmaquina, idproveedor) 
                                VALUES ('$motivo', '$fecha', '$factura', '$observacion', '$estado', '$idmaquina', '$idproveedor')");
        return $mantenimiento;
    }   
}

?>