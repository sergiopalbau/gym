<?php 
if (isset($_POST['registrar'])) {
	$dni = $_POST['dni'];
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
	$dir_subida = "../../assets/img/";
	$fichero_subido = $dir_subida . basename($_FILES['foto']['name']);
	move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido);
  $uri_foto = $dir_subida . basename($_FILES['foto']['name']);

	require '../../controllers/db.php';
	$sql = "INSERT INTO socios (dni_socio, nombre, apellido1, apellido2, direccion, telefono, email, fecha_nacimiento, fecha_inscripcion, cuota, corriente_pago, uid3, uri_foto, actividades) VALUES ('".$dni."','".$nombre."','".$apellido1."','".$apellido2."','".$direccion."','".$telefono."','".$email."','".$nacimiento."','".$inscripcion."','".$cuota."','".$corriente."','".$tarjeta."','".$uri_foto."','" . json_encode($actividades) ."')";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../../pages/socios/socios.php');
	}else{
		echo $sql;
	}
// ,'" . json_encode($horario) ."'
}
// dni_socio 	nombre 	apellido1 	apellido2 	direccion 	telefono 	email 	fecha_nacimiento 	fecha_inscripcion 	cuota 	corriente_pago 	uid3 	uri_foto
?>