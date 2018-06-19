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
	$dir_subida = "../../assets/img/";
	$fichero_subido = $dir_subida . basename($_FILES['foto']['name']);
	move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido);
  $uri_foto = $dir_subida . basename($_FILES['foto']['name']);
	require '../../controllers/db.php';
	$sql = "INSERT INTO staff (dni_staff, nombre, apellido1, apellido2, perfil, uid2, foto_uri) VALUES ('".$dni."','".$nombre."','".$apellido1."','".$apellido2."','".$perfil."','".$tarjeta."','".$uri_foto."');";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../../pages/staff/staff.php');
	}

}

?>