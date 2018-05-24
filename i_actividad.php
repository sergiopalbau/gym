<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar datos</title>
</head>
<body>
	<?php
	// si en el formulario no se selecciono la restriccion .... no la mandra asi la forzamos a guardar en la bbdd
	if ($_POST){
		print_r($_POST);echo"<br>";echo"<br>";
		if (isset($_POST['restriccion']))
		{
			$res=1;
		}else{
			$res=0;
		}

		print_r($_POST);echo "<br>";
		require_once ("Db.php");

		if (isset($_POST['actualiza']))
		{
			$sql="UPDATE actividad SET nombre='".$_POST['nombre']. "',cuota=".  $_POST['cuota'] .",restriccion=" .  $res . ",horario='".$_POST['horario']."'  WHERE id_act=".$_POST['actualiza'];

		}else{
			$sql = "INSERT INTO actividad (id_act, nombre, cuota, restriccion, horario) VALUES ('" . ''. "','". $_POST['nombre']. "',".  $_POST['cuota'] . ","  .  $res . ",'" . $_POST['horario']."')";	
		}

		


	
		echo $sql;
		echo"<br>";echo"<br>";
		Db::ejecutaSentencia ($sql);
		header('Location: p_actividad.php');
	}else
	{
		echo " A saber que pasa";
	}
	?>
</body>
</html>


