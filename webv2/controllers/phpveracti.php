<?php
if (!isset($_GET['id'])) {
	header('Location: ../pages/actividades.php');
}else{
	$id = $_GET['id'];
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "SELECT * FROM  actividad WHERE id_act='".$id."';";
	$resultado = $bd->query($sql);
	if ($resultado) {
		$data = $resultado->fetch();
		$nombre = $data['nombre'];
		$cuota = $data['cuota'];
		$restriccion = $data['restriccion'];
		$horario = $data['horario'];
	}
}
?>