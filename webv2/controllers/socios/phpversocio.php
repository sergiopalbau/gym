<?php
if (!isset($_GET['id'])) {
	header('Location: ../../pages/socios/socios.php');
}else{
	$id = $_GET['id'];
	require '../../controllers/db.php';
	$sql = "SELECT * FROM  socios WHERE dni_socio='".$id."';";
	$resultado = $bd->query($sql);
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
		$uri_foto = $data['uri_foto'];
		if($data['corriente_pago'] == 1){
			$corriente = "Si";
			}else{
				$corriente = "No";
			} 
	
	}
}
	
?>