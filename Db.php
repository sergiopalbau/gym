

<?php

class Db
{
/** Db.php
* Acciones sobre la base de datos.
*/

	private static $host = "localhost";
	private static $dbUser = "root";
	private static $dbPwd = "";
	private static $db = "saya";
	private static $mysqli;


	/** conecta() -- conectamos a la base de datos definida
	*/

	public static function  conecta(){

		self::$mysqli = new mysqli(self::$host, self::$dbUser,self::$dbPwd,self::$db);

		if (self::$mysqli->connect_errno) {
			echo " No se puede conectar a la base de datos";
			echo "Error: Fallo al conectarse a MySQL debido a: \n";
			echo "Errno: " . $m->connect_errno . "\n";
			echo "Error: " . $m->connect_error . "\n";
			exit;
		}
	}

	/** cierra() -  cierra la base de datos citada
	*/
	public static function  cierra(){
		self::$mysqli->close();

	}

	/** recuperarTabla() --  lista todos los campos de la tabla
	* @param $tabla string -- tabla que queremos recuperar.
	*/
	public static function recuperarTabla ($tabla){
		Db::conecta();
		$sql ="Select * From $tabla";
		$m=self::$mysqli;
		$resultado= $m->query($sql);
		Db::cierra();

		return $resultado;

	}

	
}