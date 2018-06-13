<?php 
if (!isset($_GET['id'])) {
	header('Location: ../pages/staff.php');
}else{
	$id = $_GET['id'];
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "SELECT * FROM  staff WHERE dni_staff='".$id."';";
	$resultado = $bd->query($sql);
	if ($resultado) {
		$data = $resultado->fetch();
		$dni = $data['dni_staff'];
		$tarjeta = $data['uid2'];
		$nombre = $data['nombre'];
		$apellido1 = $data['apellido1'];
		$apellido2 = $data['apellido2'];
		$perfil = $data['perfil'];
	}
}
?>