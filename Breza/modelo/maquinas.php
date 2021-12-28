<?php
include_once("conexion.php");

class Maquinas{

    public function listaMaquina(){
        $lista = Conexion::select("SELECT m.idmaquina, m.codigo, m.nombre 'Nombre de Maquina', mr.nombre Marca, m.ubicacion, m.cantidad, m.estado
                                FROM maquinas m, marca mr WHERE m.idmarca = mr.idmarca ORDER BY m.estado DESC");
        return $lista;
    }

    public function maquinaId($id){
        $maquina = Conexion::select("SELECT m.idmaquina, m.codigo, m.nombre 'Nombre de Maquina', mr.nombre Marca, m.ubicacion, m.cantidad, m.estado
                                FROM maquinas m, marca mr WHERE m.idmarca = mr.idmarca AND m.idmaquina = $id");
        return $maquina[0]; 
    }

    public function modificar($id, $codigo, $nombre, $ubicacion, $cantidad, $estado, $idmarca){
        $maquina = Conexion::query("UPDATE maquinas SET Codigo = '$codigo', Nombre = '$nombre', Ubicacion = '$ubicacion', Cantidad = '$cantidad', Estado = $estado, idmarca = '$idmarca' WHERE idmaquina = $id");
        return $maquina;
    }

    public function cambioEstado($id, $estado){
        $maquina = Conexion::query("UPDATE maquinas SET Estado = $estado WHERE idmaquina = $id");
        return $maquina;
    }

    public function eliminar($id){
        $maquina = Conexion::query("DELETE FROM maquina WHERE idmaquina = $id");
        return $maquina;
    }

    public function agregar($codigo, $nombre, $ubicacion, $cantidad, $estado, $idmarca){
        $maquina = Conexion::query("INSERT INTO maquinas(Codigo, Nombre, Ubicacion, Cantidad, Estado, idmarca) 
                                VALUES ('$codigo', '$nombre', '$ubicacion', '$cantidad', '$estado', '$idmarca')");
        return $maquina;
    }
}

?>