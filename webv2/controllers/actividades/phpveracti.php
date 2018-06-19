<?php
if (!isset($_GET['id'])) {
	header('Location: ../../pages/actividades/actividades.php');
}else{
	$id = $_GET['id'];
	require '../../controllers/db.php';
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