<?php
define("HOST","localhost");
define("USER","root");
define("PASSWORD","12345678");
define("BD","breza");

class Conexion{
	public static $conexion = null;

	private function __construct(){}

	public static function select($consulta){
		if(self::$conexion == null){
			self::$conexion = new mysqli(HOST, USER,PASSWORD, BD) or die(mysql_error());
			self::$conexion->set_charset('utf8');
		}
		$list = mysqli_query(self::$conexion, $consulta)->fetch_all();
		return $list;
	}

	public static function query($consulta){
		if(self::$conexion == null){
			self::$conexion= new mysqli(HOST, USER,PASSWORD, BD) or die(mysql_error());
			self::$conexion->set_charset('utf8');
		}
		$res = mysqli_query(self::$conexion, $consulta).mysqli_error(self::$conexion);
		return $res;
	}
    
}

?>

