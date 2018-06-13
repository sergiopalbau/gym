<?php
$id = $_GET['id'];
if (!isset($id)) {
	header('Location: ../pages/actividades.php');
}else{
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
if (isset($_POST['actualizar'])) {
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$cuota = $_POST['cuota'];
	if (isset($_POST['restriccion']))
		{
			$res=1;
		}else{
			$res=0;
		}
	$horario = array();
	for ($i=0; $i<count($_POST['dia']); $i++)
	{
		$horario[]	= array(
			'dia' => $_POST['dia'][$i],
			'desde' => $_POST['desde'][$i],
			"hasta" => $_POST['hasta'][$i]);
	}
	
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "UPDATE actividad SET nombre='".$_POST['nombre']. "',cuota=".  $_POST['cuota'] .",restriccion=" .  $res . ",horario='".json_encode($horario)."'  WHERE id_act=".$id.";";
	
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../pages/actividades.php');
	}
	
}else if (isset($_POST['eliminar'])) {
	$id = $_POST['id'];
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "DELETE FROM actividad WHERE id_act=".$id.";";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../pages/actividades.php');
	}

}
?>