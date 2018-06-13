<?php 
if (isset($_POST['registrar'])) {
	$dni = $_POST['dni'];
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
	$sql = "INSERT INTO staff (dni_staff, nombre, apellido1, apellido2, perfil, uid2) VALUES ('".$dni."','".$nombre."','".$apellido1."','".$apellido2."','".$perfil."','".$tarjeta."');";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../pages/staff.php');
	}

}

?>