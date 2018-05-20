

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
	* @returm $resultado (objeto) -- devuelve objeto consulta a la base de datos
	*/
	public static function recuperarTabla ($tabla){
		Db::conecta();
		$sql ="Select * From $tabla";
		$m=self::$mysqli;
		$resultado= $m->query($sql);
		Db::cierra();

		return $resultado;

	}

	/** recuperarElemento () -- recupera fila con coincidencia en el busqueda
	* @param $tabla string -- tabla en la que buscar
	* @param $columna string -- columna en la que mirar
	* @param $busqueda string -- coincidencia que encontrar.
	***********************************************************************/

	public static function recuperarElemento ($tabla,$columna,$busqueda) {
		Db::conecta();
		$sql ="Select * From $tabla where $columna = $busqueda";
		$m=self::$mysqli;
		$resultado= $m->query($sql);
		Db::cierra();

		return $resultado;

	}


	/** ejecutaSentencia()-- se pasa por argumento una sentencia sql y la recupera
	* @param $sql -string -- sentencia sql
	* @return $resultado - objeto mysqli con el resultado
	**************/

	public static function ejecutaSentencia ($sql) {
		Db::conecta();
		$m=self::$mysqli;
		$resultado= $m->query($sql);
		Db::cierra();

		return $resultado;

	}
}