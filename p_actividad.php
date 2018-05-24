<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Saya Club Sport</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

	<?php 		
				require_once ("Db.php");	
				$rawdata =Db::arrayTabla('actividad');
			?>
</head>
<body>


	<div class="container">
		<div class="row">
	  		  <ul class="nav nav-tabs">
			    <li><a href="index.php">Home</a></li>
			    <li class="active"><a href="actividad.php">Actividad</a></li>
			    <li><a href="socio.php">Socio</a></li>
			    <li><a href="staff.php">Staff</a></li>
			  </ul>
		</div>
				

		<div class="row">
			<h2>Actividad</h2>
		</div>	
		<div class="row">
			<p>	Detalle de las actividades</p>
			<table id ="example" class="table table-hover">
			    <thead>
			      <tr>
			        <th class= "">Id_Actividad</th>
			        <th class="">Nombre</th>
			        <th class="">Cuota</th>
			        <th class="">OPciones </th>
			      </tr>
			    </thead>
			    <tbody>


			<?php


				//DIBUJAMOS LA TABLA
								   
				   $columnas = count($rawdata[0])/2;

				
				   //echo $columnas;
				   $filas = count($rawdata);
				   //echo "<br>".$filas."<br>";

				   // //Añadimos los titulos

				   // for($i=1;$i<count($rawdata[0]);$i=$i+2){
				   //    next($rawdata[0]);
				   //    echo "<th><b>".key($rawdata[0])."</b></th>";
				   //    next($rawdata[0]);
				   // }

				   for($i=0;$i<$filas;$i++){

				      echo "<tr>";
				      echo "<td>". $rawdata[$i][0]. "</td>";
				      echo "<td>". $rawdata[$i][1]. "</td>";
				      echo "<td>". $rawdata[$i][2]. "</td>";
				      
				      echo '<td> <div class="btn-group-xs ">
				      				<a href="f_actividad.php?id_act='.$rawdata[$i][0].'&m=v" class="btn btn-info" role="button"><span class="glyphicon glyphicon-eye-open"></a>
    								<a href="f_actividad.php?id_act='.$rawdata[$i][0].'&m=e"  class="btn btn-primary " role="button"><span class="glyphicon glyphicon-edit"></a>
    								<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button>
  								  </div>	</td>\n';

				      // for($j=0;$j<$columnas;$j++){
				      //    echo "<td>".$rawdata[$i][$j]."</td>";

				      // }
				     
				   }
				 echo "</tr>";
				 			
			?>
			</tbody>
		</table>

		</div>
		<a href="f_actividad.php" class="btn btn-success" role="button"> Añadir actividad</a>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script>$(document).ready(function() {
    $('#example').dataTable({
    language: {
        search: "Busqueda en tabla:",
        lengthMenu: "Elementos: _MENU_",
        info:       "Mostrando de _START_ a _END_ de _TOTAL_ entradas",
        paginate: {
            first:      "<<",
            previous:   "<",
            next:       ">",
            last:       ">>"
        },

    }
});
} );
</script>
</body>
</html>