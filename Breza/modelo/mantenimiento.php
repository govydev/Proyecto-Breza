<?php
include_once("conexion.php");

class Mantenimiento{

    public function listaMantenimientos(){
        $lista = Conexion::select("SELECT m.idmantenimiento, m.motivo, m.fecha, m.factura, mq.nombre, p.nombre, m.observacion, m.estado, mq.codigo, mq.ubicacion 
                                   FROM maquinas mq,mantenimiento m, proveedor p 
                                   WHERE mq.idmaquina =  m.idmaquina and m.idproveedor = p.idproveedor order by m.fecha desc");
        return $lista;
    }

    public function listaReporte($year){
        $lista = Conexion::select("SELECT m.idmantenimiento, m.motivo, m.fecha, m.factura, mq.nombre, p.nombre, m.observacion, m.estado, mq.codigo, mq.ubicacion 
                                   FROM maquinas mq,mantenimiento m, proveedor p 
                                   WHERE mq.idmaquina =  m.idmaquina and m.idproveedor = p.idproveedor and YEAR(m.fecha) = $year order by m.fecha desc");
        return $lista;
    }

    public function MantenimientoId($id){
        $mantenimiento = Conexion::select("SELECT m.idmantenimiento, m.motivo, m.fecha, m.factura, mq.nombre, p.nombre, m.observacion, m.estado
                                           FROM maquinas mq,mantenimiento m, proveedor p 
                                           WHERE mq.idmaquina =  m.idmaquina and m.idproveedor = p.idproveedor and m.idmantenimiento = $id");
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