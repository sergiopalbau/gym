<?php
$actividades = json_decode($actividades,true);
foreach ($actividades as $key => $value) {

	$actividad = $value['actividad'];

	print("<tr>");
	print("<td>$actividad <input type='hidden' name='actividades[]' value='$actividad'></td>");
	print("<td><button type ='button' onclick='Eliminar(this)' class='btn btn-danger'>Borrar</button></td>");
	print("</tr>");
}
?>