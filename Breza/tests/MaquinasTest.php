<?php
namespace App\Test;

use App\modelo\Conexion;
use App\modelo\Maquinas;
use App\modelo\Mock\MockMaquinas;
use PHPUnit\Framework\TestCase;


include_once("../Breza/modelo/maquinas.php");
include_once("../Breza/modelo/conexion.php");
// require "../Breza/modelo/maquinas.php";

class MaquinasTest extends TestCase {
    // public function testAgregarMaquina()
    // {
    //     //datos simulados
    //     $codigo = "Hor-01";
    //     $nombre = "Horno Digital 2";
    //     $ubicacion = "Cortado";
    //     $cantidad = "10";
    //     $estado = "1";
    //     $idmarca = "1";
    //     //llamado de funciones
    //     $maquinas = new Maquinas();
    //     $estado = $maquinas->agregar($codigo, $nombre, $ubicacion, $cantidad, $estado, $idmarca);
    //     $lista = Conexion::select("SELECT m.idmaquina, m.codigo, m.nombre 'Nombre de Maquina', mr.idmarca Marca, m.ubicacion, m.cantidad, m.estado
    //         FROM maquinas m, marca mr WHERE m.idmarca = mr.idmarca ORDER BY m.idmaquina DESC LIMIT 1");
    //     //aseerts
    //     $this->assertIsArray($lista); //verificacion de array
    //     $this->assertEquals('1', $estado); //verificacion de estado al guardar

    //     $this->assertEquals($codigo, $lista[0][1]); //verificacion de codigo enviado
    //     $this->assertEquals($nombre, $lista[0][2]); //verificacion de nombre enviado
    //     $this->assertEquals($idmarca, $lista[0][3]); //verificacion de idmarca enviado
    //     $this->assertEquals($ubicacion, $lista[0][4]); //verificacion de ubicacion enviado
    //     $this->assertEquals($cantidad, $lista[0][5]); //verificacion de cantidad enviado
    //     $this->assertEquals($estado, $lista[0][6]); //verificacion de estado enviado
        
    //     $maquinas->eliminar($lista[0][0]);
    // }

    public function testAgregarMockMaquina()
    {
        //datos simulados
        $codigo = "Hor-01";
        $nombre = "Horno Digital 2";
        $ubicacion = "Cortado";
        $cantidad = "10";
        $estado = "1";
        $idmarca = "1";
        //llamado de funciones
        $maquinas = new MockMaquinas();
        $lista = $maquinas->agregar($codigo, $nombre, $ubicacion, $cantidad, $estado, $idmarca);
        
        //aseerts
        $this->assertIsArray($lista); //verificacion de array
        $this->assertEquals('1', $lista['estado']); //verificacion de estado al guardar

        $this->assertEquals($codigo, $lista['data']['codigo']); //verificacion de codigo enviado
        $this->assertEquals($nombre, $lista['data']['nombre']); //verificacion de nombre enviado
        $this->assertEquals($idmarca, $lista['data']['idmarca']); //verificacion de idmarca enviado
        $this->assertEquals($ubicacion, $lista['data']['ubicacion']); //verificacion de ubicacion enviado
        $this->assertEquals($cantidad, $lista['data']['cantidad']); //verificacion de cantidad enviado
        $this->assertEquals($estado, $lista['data']['estado']); //verificacion de estado enviado
        
    }
}
