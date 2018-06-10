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
						$restriccion = $data['restriccion'];
						$horario = $data['horario'];
					 							
						print("<div class='card'>");
						print("<img src='estilos/img/naranja.jpg' class='card-img-top img-fluid'>");
						print("<div class='card-body'>");
						print("<h3 class='card-title'>".$nombre."</h3>");
						print("<p class='card-text'>Cuota de: ".$cuota."€</p>");
						print("<a href='veracti.php?id=$id' class='btn btn-primary btn-block'>Ver</a>");
						print("<a href='#' class='btn btn-warning btn-block'>Editar</a>");
						print("</div>");
						print("</div>");
						$data = $resultado->fetch();
					}


?>