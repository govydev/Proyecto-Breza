<?php
include_once("conexion.php");

class Mantenimiento{

    public function listaMantenimientos(){
        $lista = Conexion::select("SELECT M.IDMANTENIMIENTO, M.MOTIVO, M.FECHA, M.FACTURA, MQ.NOMBRE, P.NOMBRE, M.OBSERVACION, M.ESTADO, MQ.CODIGO, MQ.UBICACION 
                                   FROM MAQUINAS MQ,MANTENIMIENTO M, PROVEEDOR P 
                                   WHERE MQ.IDMAQUINA =  M.IDMAQUINA AND M.IDPROVEEDOR = P.IDPROVEEDOR ORDER BY M.FECHA DESC");
        return $lista;
    }

    public function MantenimientoId($id){
        $mantenimiento = Conexion::select("SELECT M.IDMANTENIMIENTO, M.MOTIVO, M.FECHA, M.FACTURA, MQ.NOMBRE, P.NOMBRE, M.OBSERVACION, M.ESTADO
                                     FROM MAQUINAS MQ,MANTENIMIENTO M, PROVEEDOR P 
                                     WHERE MQ.IDMAQUINA =  M.IDMAQUINA AND M.IDPROVEEDOR = P.IDPROVEEDOR AND M.IDMANTENIMIENTO = $id");
        return $mantenimiento[0]; 
    }

    public function modificar($datos, $id){
        $mantenimiento = Conexion::query("UPDATE mantenimiento 
                                        SET Motivo = '$datos[0]', Fecha = '$datos[1]', 
                                        Factura = '$datos[2]', Observacion = '$datos[3]', 
                                        Estado = $datos[4], idmaquina = $datos[5], idproveedor = $datos[6] 
                                        WHERE idmantenimiento = $id");
        return $mantenimiento;
    }

    public function cambioEstado($id, $estado){
        $mantenimiento = Conexion::query("UPDATE mantenimiento SET Estado = $estado WHERE idmantenimiento = $id");
        return $mantenimiento;
    }

    public function eliminar($id){
        $mantenimiento = Conexion::query("DELETE FROM mantenimiento WHERE idmantenimiento = $id");
        return $mantenimiento;
    }

    public function agregar($datos){
        $mantenimiento = Conexion::query("INSERT INTO mantenimiento(Motivo, Fecha, Factura, Observacion, Estado, idmaquina, idproveedor) 
                                VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')");
        return $mantenimiento;
    }   

}

?>