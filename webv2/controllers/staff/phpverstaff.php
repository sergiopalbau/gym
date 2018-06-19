<?php 
if (!isset($_GET['id'])) {
	header('Location: ../../pages/staff/staff.php');
}else{
	$id = $_GET['id'];
	require '../../controllers/db.php';
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
		$uri_foto = $data['foto_uri'];
	}
}
?>