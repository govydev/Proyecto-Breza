<?php
use App\modelo\Conexion;
use App\modelo\Usuario;
use PHPUnit\Framework\TestCase;


include_once("../Breza/modelo/usuario.php");
include_once("../Breza/modelo/conexion.php");

class UsuarioTest extends TestCase{
    public function testAgregarUsuario()
    {
        // datos simulados
        $data = ['user', 'userAp', 'userAM', 'user', '123', 1];
        //llamado de funciones
        $usuario = new Usuario();
        $estado = $usuario->agregar($data);
        $lista = Conexion::select("SELECT * FROM usuarios ORDER BY idusuario DESC LIMIT 1");
        //aseerts

        $this->assertIsArray($data); //verificacion si los datos enviados estan en un array
        $this->assertEquals('1', $estado); //verificacion de estado al guardar usuario
        $this->assertIsArray($lista); //verificacion si los datos recibidos estan en un array

        $this->assertEquals($data[0], $lista[0][1]); //verificacion de nombre enviado
        $this->assertEquals($data[1], $lista[0][2]); //verificacion de apellido paterno enviado
        $this->assertEquals($data[2], $lista[0][3]); //verificacion de apellido materno enviado
        $this->assertEquals($data[3], $lista[0][4]); //verificacion de usuario enviado
        $this->assertEquals($data[4], $lista[0][5]); //verificacion de contraseña enviado
        $this->assertEquals($data[5], $lista[0][6]); //verificacion de estado enviado

        $usuario->eliminar($lista[0][0]);
    }
}