<?php 
//conexion
$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$dsn = "mysql:host=localhost;dbname=saya";
$usuario = 'dwes';
$contrasena = 'abc123.';
$bd = new PDO($dsn, $usuario, $contrasena, $opc);

$sql = "SELECT * FROM  actividad";
$resultado = $bd->query($sql);
if ($resultado) {
	$data = $resultado->fetch();
}
while ($data !=null) {
						$id = $data['id_act'];
						$nombre = $data['nombre'];
						$cuota = $data['cuota'];
						print("<tr>");
						print("<td>".$id."</td>");
						print("<td>".$nombre."</td>");
						print("<td>".$cuota."</td>");
						print("<td>
										<div class='button-group'>
											<a href='../pages/veracti.php?id=".$id."' class='btn btn-success'>Ver</a>
											<a href='../pages/editacti.php?id=".$id."' class='btn btn-warning'>Editar</a>
										</div>
									</td>");
						print("</tr>");
						$data = $resultado->fetch();
					}


?>