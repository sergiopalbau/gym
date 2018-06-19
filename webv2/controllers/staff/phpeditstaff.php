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
if (isset($_POST['registrar'])) {
	$dni = $_POST['id'];
	$tarjeta = $_POST['tarjeta'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$perfil = $_POST['perfil'];
	$dir_subida = "../../assets/img/";
	$fichero_subido = $dir_subida . basename($_FILES['foto']['name']);
	move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido);
  $uri_foto = $dir_subida . basename($_FILES['foto']['name']);
	require '../../controllers/db.php';
	$sql = "UPDATE staff SET nombre='".$nombre."', apellido1='".$apellido1."', apellido2='".$apellido2."',perfil='".$perfil."', uid2='".$tarjeta."',foto_uri='".$uri_foto."'  WHERE dni_staff='".$dni."';";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../../pages/staff/staff.php');
	}

}else if (isset($_POST['eliminar'])) {
	$id = $_POST['id'];
	require '../../controllers/db.php';
	$sql = "DELETE FROM staff WHERE dni_staff='".$id."';";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../../pages/staff/staff.php');
	}
}
?>