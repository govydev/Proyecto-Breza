<?php
include_once("conexion.php");

class Calibracion{

    public function listaCalibracion(){
        $lista = Conexion::select("SELECT c.idcalibracion, c.Fecha, c.numCertificado, c.Estado, m.Nombre, p.Nombre 
                        FROM calibracion c, maquinas m, proveedor p 
                        WHERE c.idmaquina = m.idmaquina AND c.idproveedor = p.idproveedor ORDER BY C.Fecha");
        return $lista;
    }
    
    public function CalibracionId($id){
        $maquina = Conexion::select("SELECT c.idcalibracion, c.Fecha, c.numCertificado, c.Estado, m.Nombre, p.Nombre 
                                        FROM calibracion c, maquinas m, proveedor p 
                                        WHERE c.idmaquina = m.idmaquina AND c.idproveedor = p.idproveedor AND c.idcalibracion = $id");
        return $calibracion[0]; 
    }

    public function modificar($id, $fecha, $numCertificado, $estado, $idmaquina, $idproveedor){
        $maquina = Conexion::query("UPDATE calibracion SET fecha = '$fecha', numCertificado = '$numCertificado', Estado = '$estado', idmaquina = '$idmaquina', idproveedor = '$idproveedor' WHERE idcalibracion = $id");
        return $calibracion;
    }

    public function cambioEstado($id, $estado){
        $maquina = Conexion::query("UPDATE calibracion SET Estado = $estado WHERE idcalibracion = $id");
        return $calibracion;
    }

    public function eliminar($id){
        $maquina = Conexion::query("DELETE FROM calibracion WHERE idcalibracion = $id");
        return $calibracion;
    }

    public function agregar($id, $fecha, $numCertificado, $estado, $idmaquina, $idproveedor){
        $maquina = Conexion::query("INSERT INTO mantemiento(Fecha, numCertificado, Estado, idmaquina, idproveedor) 
                                VALUES ('$fecha','$numCertificado', '$estado', '$idmaquina', '$idproveedor')");
        return $calibracion;
    }   
}

?>