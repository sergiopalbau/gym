<?php
if (isset($_POST['registrar'])) {
	
	$nombre = $_POST['nombre'];
	$cuota = $_POST['cuota'];
	if (isset($_POST['restriccion']))
		{
			$res=1;
		}else{
			$res=0;
		}
	$horario = array();
	for ($i=0; $i<count($_POST['dia']); $i++)
	{
		$horario[]	= array(
			'dia' => $_POST['dia'][$i],
			'desde' => $_POST['desde'][$i],
			"hasta" => $_POST['hasta'][$i]);
	}
	
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$dsn = "mysql:host=localhost;dbname=saya";
	$usuario = 'dwes';
	$contrasena = 'abc123.';
	$bd = new PDO($dsn, $usuario, $contrasena, $opc);
	$sql = "INSERT INTO actividad (id_act, nombre, cuota, restriccion, horario) VALUES ('" . ''. "','". $nombre. "',".  $cuota. ","  .  $res . ",'" . json_encode($horario) ."')";
	$resultado = $bd->query($sql);
	if($resultado){
		header('Location: ../pages/actividades.php');
	}

}

?>