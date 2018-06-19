<?php 
//conexion
require '../../controllers/db.php';
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
											<a href='../../pages/actividades/veracti.php?id=".$id."' class='btn btn-success'>Ver</a>
											<a href='../../pages/actividades/editacti.php?id=".$id."' class='btn btn-warning'>Editar</a>
										</div>
									</td>");
						print("</tr>");
						$data = $resultado->fetch();
					}


?>