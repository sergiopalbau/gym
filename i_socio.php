<?php

	if ($_POST)
	{
		print_r ($_POST);
		$dni = $_POST['dni'];
		$fechaN= $_POST['fecha_nacimiento'];
		$nombre= $_POST['nombre'];
		$apellido1= $_POST['apellido1'];
		$apellido2= $_POST['apellido2'];
		$direccion= $_POST['direccion'];
		$fechaI= $_POST['fecha_inscripcion'];
		$uid= $_POST['tarjeta'];
		$cuota= $_POST['cuota'];
		$restriccion= $_POST['restriccion'];
		$corriente_pago= $_POST['corriente_pago'];
		$email = $_POST['email'];
		$telefono=$_POST['telefono'];

		$sql="INSERT INTO socios(dni_socio, nombre, apellido1, apellido2, direccion, telefono, email, fecha_nacimiento, fecha_inscripcion, cuota, corriente_pago, uid3, uri_foto) VALUES ('$dni','$nombre','$apellido1','$apellido2','$direccion','$telefono','$email',$fechaN,$fechaI,$cuota,$corriente_pago,'$uid','')";


		echo "<br><br><hr><br> $dni $fechaN $nombre $apellido1 $apellido2 $direccion $fechaI $uid $cuota $restriccion $corriente_pago";
		echo"<br><br><hr><br>";
		echo $sql;
		require_once('Db.php');
		Db::ejecutaSentencia($sql);

	}else
	{
		echo "nada que mostrar";
	}


