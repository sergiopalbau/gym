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
if (isset($_POST['registrar'])) {
	$dni = $_POST['id'];
	$tarjeta = $_POST['tarjeta'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$perfil = $_POST['perfil'];
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "UPDATE staff SET nombre='".$nombre."', apellido1='".$apellido1."', apellido2='".$apellido2."',perfil='".$perfil."', uid2='".$tarjeta."'  WHERE dni_staff='".$dni."';";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../pages/staff.php');
	}

}else if (isset($_POST['eliminar'])) {
	$id = $_POST['id'];
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "DELETE FROM staff WHERE dni_staff='".$id."';";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../pages/staff.php');
	}
}
?>