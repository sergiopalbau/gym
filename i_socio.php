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

		if (isset($_POST['actualiza']))
		{
			$sql="UPDATE socios SET  
			nombre ='". $nombre ."',
			apellido1 ='". $apellido1 ."',
			apellido2 ='". $apellido2 ."',
			direccion ='". $direccion ."',
			telefono ='". $telefono ."',
			email ='". $email ."',
			fecha_nacimiento ='". $fechaN ."',
			fecha_inscripcion ='". $fechaI ."',
			cuota =". $cuota .",
			corriente_pago =". $corriente_pago .",
			uid3 ='". $uid ."',
			uri_foto =''
			WHERE dni_socio ='". $dni ."'";
			
			echo "<br><hr><br>". $sql;
		}else{

		$sql="INSERT INTO socios(dni_socio, nombre, apellido1, apellido2, direccion, telefono, email, fecha_nacimiento, fecha_inscripcion, cuota, corriente_pago, uid3, uri_foto) VALUES ('$dni','$nombre','$apellido1','$apellido2','$direccion','$telefono','$email','$fechaN','$fechaI',$cuota,$corriente_pago,'$uid','')";

			echo "<br><hr><br>". $sql;
		}

		//echo "<br><br><hr><br> $dni $fechaN $nombre $apellido1 $apellido2 $direccion $fechaI $uid $cuota $restriccion $corriente_pago";
		//echo"<br><br><hr><br>";
		
		require_once('Db.php');
		Db::ejecutaSentencia($sql);
		//header('Location: p_socio.php');

	}else
	{
		echo "nada que mostrar";
	}

	echo "<br><br><a href='p_socio.php'>Volver</a>";


