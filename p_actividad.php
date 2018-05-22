<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Saya Club Sport</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">


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
				

		<div class="col-xs-9">
			<h2>Actividad</h2>

			
		
			<?php 

				require_once ("Db.php");
				$rawdata =Db::arrayTabla('actividad');
				

			?>
			 <table class="table table-hover">
			    <thead >
			      <tr>
			        <th class= "col-md-1">Id_Actividad</th>
			        <th class="col-md-6">Nombre</th>
			        <th class="col-md-1">Cuota</th>
			        <th class="col-md-4">OPciones </th>
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
				      echo "<td>". $rawdata[$i][0]. "</td>\n";
				      echo "<td>". $rawdata[$i][1]. "</td>\n";
				      echo "<td>". $rawdata[$i][2]. "</td>\n";
				      
				      echo '<td> <div class="btn-group-xs ">
    								<button type="button" role="link"  class="btn btn-info "><span class="glyphicon glyphicon-eye-open"> VER </button>
    								<button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-edit"> EDITAR</button>
    								<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> BORRAR </button>
  								  </div>	</td>\n';

				      // for($j=0;$j<$columnas;$j++){
				      //    echo "<td>".$rawdata[$i][$j]."</td>";

				      // }
				     
				   }
				 echo "</tr>";

			?>

		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>