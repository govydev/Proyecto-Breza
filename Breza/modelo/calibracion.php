<?php
include_once("conexion.php");

class Calibracion{

    public function listaCalibracion(){
        $lista = Conexion::select("SELECT c.idcalibracion, c.Fecha, c.numCertificado, m.Nombre, p.Nombre, c.Estado, m.codigo, m.ubicacion, p.telefono 
                        FROM calibracion c, maquinas m, proveedor p 
                        WHERE c.idmaquina = m.idmaquina AND c.idproveedor = p.idproveedor ORDER BY c.Fecha DESC");
        return $lista;
    }

    public function listaReporte($year){
        $lista = Conexion::select("SELECT c.idcalibracion, c.Fecha, c.numCertificado, m.Nombre, p.Nombre, c.Estado, m.codigo, m.ubicacion, p.telefono 
                        FROM calibracion c, maquinas m, proveedor p 
                        WHERE c.idmaquina = m.idmaquina AND c.idproveedor = p.idproveedor and YEAR(c.fecha) = $year ORDER BY c.Fecha DESC");
        return $lista;
    }
    
    public function calibracionId($id){
        $calibracion = Conexion::select("SELECT c.idcalibracion, c.Fecha, c.numCertificado, c.Estado, m.Nombre, p.Nombre FROM calibracion c, maquinas m, proveedor p WHERE c.idmaquina = m.idmaquina AND c.idproveedor = p.idproveedor AND c.idcalibracion = $id");
        return $calibracion[0]; 
    }

    public function modificar($id, $fecha, $numCertificado, $estado, $idmaquina, $idproveedor){
        $calibracion = Conexion::query("UPDATE calibracion SET fecha = '$fecha', numCertificado = '$numCertificado', Estado = '$estado', idmaquina = '$idmaquina', idproveedor = '$idproveedor' WHERE idcalibracion = $id");
        return $calibracion;
    }

    public function cambioEstado($id, $estado){
        $calibracion = Conexion::query("UPDATE calibracion SET Estado = $estado WHERE idcalibracion = $id");
        return $calibracion;
    }

    public function eliminar($id){
        $calibracion = Conexion::query("DELETE FROM calibracion WHERE idcalibracion = $id");
        return $calibracion;
    }

    public function agregar($fecha, $numCertificado, $estado, $idmaquina, $idproveedor){
        $calibracion = Conexion::query("INSERT INTO calibracion(Fecha, numCertificado, Estado, idmaquina, idproveedor) 
                                VALUES ('$fecha','$numCertificado', '$estado', '$idmaquina', '$idproveedor')");
        return $calibracion;
    }   
}

?>