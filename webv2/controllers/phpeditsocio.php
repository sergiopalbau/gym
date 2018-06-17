<?php 
$id = $_GET['id'];
if (!isset($id)) {
	header('Location: ../pages/socios.php');
}else{
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "SELECT * FROM  socios WHERE dni_socio='".$id."';";
	$resultado = $bd -> query($sql);
	if ($resultado) {
		$data = $resultado->fetch();
		$dni = $data['dni_socio'];
		$nombre = $data['nombre'];
		$apellido1 = $data['apellido1'];
		$apellido2 = $data['apellido2'];
		$direccion = $data['direccion'];
		$email = $data['email'];
		$telefono = $data['telefono'];
		$nacimiento = $data['fecha_nacimiento'];
		$inscripcion = $data['fecha_inscripcion'];
		$cuota = $data['cuota'];
		$tarjeta = $data['uid3'];
		$actividades = $data['actividades'];
		if($data['corriente_pago'] == 1){
			$corriente = "Si";
			}else{
				$corriente = "No";
			} 

	}
}
if (isset($_POST['actualizar'])) {
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$nacimiento = $_POST['fecha'];
	$inscripcion = $_POST['inscripcion'];
	$cuota = $_POST['cuota'];
	$corriente = $_POST['corriente'];
	$tarjeta = $_POST['tarjeta'];
	$actividades = array();
	for ($i=0; $i < count($_POST['actividades']); $i++) { 
		$actividades [] = array(
			'actividad' => $_POST['actividades'][$i]
		);
	}
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "UPDATE socios SET nombre='".$nombre. "',apellido1='".$apellido1."',apellido2='".$apellido2."',direccion='".$direccion."',telefono='".$telefono."',email='".$email."',fecha_nacimiento='".$nacimiento."',fecha_inscripcion='".$inscripcion."', cuota=".  $cuota .", uid3='".$tarjeta."',actividades='".json_encode($actividades)."'  WHERE dni_socio=".$id.";";
}
?>