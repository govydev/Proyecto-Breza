<?php
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("BD","aaa"); 

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

	public static function query($consulta, $id = null){
		if(self::$conexion == null){
			self::$conexion= new mysqli(HOST, USER,PASSWORD, BD) or die(mysql_error());
			self::$conexion->set_charset('utf8');
		}
		$res = mysqli_query(self::$conexion, $consulta).mysqli_error(self::$conexion);
		return $id == null? $res: self::$conexion->insert_id;
	}
    
}

?>

