<?php
$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$dsn = "mysql:host=localhost;dbname=saya";
$usuario = 'dwes';
$contrasena = 'abc123.';
$bd = new PDO($dsn, $usuario, $contrasena, $opc);

$sql = "SELECT * FROM  staff";
$resultado = $bd->query($sql);
if ($resultado) {
	$data = $resultado->fetch();
}
while ($data !=null) {
						$dni = $data['dni_staff'];
						$nombre = $data['nombre'];
						$apellido1 = $data['apellido1'];
						$apellido2 = $data['apellido2'];
						$uid = $data['uid2'];
						print("<tr>");
						print("<td>".$dni."</td>");
						print("<td>".$nombre."</td>");
						print("<td>".$apellido1." ".$apellido2."</td>");
						print("<td>".$uid."</td>");
						print("<td>
										<div class='button-group'>
											<a href='../pages/verstaff.php?id=".$dni."' class='btn btn-success'>Ver</a>
											<a href='../pages/editstaff.php?id=".$dni."' class='btn btn-warning'>Editar</a>
										</div>
									</td>");
						print("</tr>");
						$data = $resultado->fetch();
					}

// dni_staff 	nombre 	apellido1 	apellido2 	perfil 	uid2 	foto_uri
?>