<?php
require 'db.php';

$sql = "SELECT * FROM  actividad";
$resultado = $bd->query($sql);
if ($resultado) {
	$data = $resultado->fetch();
}
while ($data !=null) {
	$actis[] = $data['nombre'];
	$data = $resultado->fetch();
}
?>