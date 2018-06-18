<?php
$horario = json_decode($horario, true);

foreach ($horario as $key) {

$dia = $key['dia'];
$desde = $key['desde'];
$hasta = $key['hasta'];

print("<tr>");
print("<td>$dia <input type='hidden' name='dia[]' value='$dia'></td>");
print("<td>$desde <input type='hidden' name='desde[]' value='$desde'></td>");
print("<td>$hasta <input type='hidden' name='hasta[]' value='$hasta'></td>");
print("<td><button type ='button' onclick='Eliminar(this)' class='btn btn-danger'>Borrar</button></td>");
print("</tr>");
}
?>