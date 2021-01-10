<?php
include_once("conexion.php");

class Mantenimiento{

<<<<<<< HEAD
    public function autenticacion($txtUser, $txtPass){
        $user = Conexion::select("SELECT * FROM usuarios WHERE usuario = '$txtUser' and estado = 1");
        if($user[0][6] == 1){
            return $txtPass == $user[0][5] ? $user[0] : 1;
        }
        else{
            return 0;
        }
    }

    public function usuarioId($id){
        $user = Conexion::select("SELECT * FROM usuarios WHERE idUsuario = $id");
        return $user[0];
    }

    public function usuarios(){
        $user = Conexion::select("SELECT * FROM usuarios");
        return $user;
    }

    public function modificar($datos, $id){
        $user = Conexion::query("UPDATE usuarios SET nombre = '$datos[0]', apPaterno = '$datos[1]', apMaterno = '$datos[2]', usuario = '$datos[3]',`password` = '$datos[4]', estado = $datos[5] WHERE idUsuario = $id");
        return $user;
    }

    public function cambioEstado($id, $estado){
        $user = Conexion::query("UPDATE usuarios SET estado = $estado WHERE idUsuario = $id");
        return $user;
    }

    public function eliminar($id){
        $user = Conexion::query("DELETE FROM usuarios WHERE idUsuario = $id");
        return $user;
    }

    public function agregar($datos){
        $user = Conexion::query("INSERT INTO usuarios(nombre, apPaterno, apMaterno, usuario, `password`, estado) 
                                VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', 1)", 1);
        return $user;
    }

=======
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
>>>>>>> d97854471f3b86c913bbf3863d6ed54936244664
}

?>