<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Saya Club Sport</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	

	<?php 
		// elegios el modo en presentar el formulario vista, editar, nuevo	
		$vista="";
		$nombre="";
		$cuota="";
		$restriccion="";
		$horario="";
		if (isset ($_GET['id_act']))
		{
			$vista=$_GET['m'];
			if ($vista=='v'){		//modo ver

			 $vista = "hide";;
			}
			// si mandamos por get una id. la buscamos en la base de datos,
			require_once ("Db.php");
			 $rawData=Db::ArrayElemento ("actividad","id_act",$_GET['id_act']);
			 if (is_null($rawData))
			 {
			 	echo "</head><body><h1> El elemento que busca no existe</h1><br><br><a href='p_actividad.php'>[Volver]</a></body></html>";
			 	exit;
			 }
			// esto hay que borrar
			
			print_r($rawData);	
			//--------------------

			$nombre =$rawData['nombre'];
			$cuota = $rawData['cuota'];
			$horario=$rawData['horario'];
			if ($rawData['restriccion']!="0") {
				$restriccion = "checked";

			}

		}

	?>

</head>
<body>


	<div class="container">
		<div class="">
	  
			  <ul class="nav nav-tabs">
			    <li><a href="index.php">Home</a></li>
			    <li class="active"><a href="actividad.php">Actividad</a></li>
			    <li><a href="socio.php">Socio</a></li>
			    <li><a href="staff.php">Staff</a></li>
			  </ul>
		</div>
				

		<div class="col-xs-9">
			<h2>Actividad</h2>
			<form action="i_actividad.php" method="post">

<!-- 
				<div class="form-group">
					<label for="id_act"> Identificador Actividad</label>
					<input type="text" class="form-control " id="id_act" name="id_act" 
					maxlength="4" required="" placeholde="XXXN" title =" Compuesto por 3 letras y un numero ej: tkd1">
				</div> -->

				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" id="nombre" name="nombre" class="form-control"required title="Nombre de la actividad Deportiva" value="<?php echo $nombre;?>">
				</div>
				<div class="form-group">
					<label for="cuota">Cuota</label>
					<input type="number" min="0" max="100" step="any" id="cuota" name="cuota" class="form-control" required title="Precio de la actividad" value="<?php echo $cuota;?>">
				</div>
			
				<div class="form-group">

					<label for="restriccion"><input type="checkbox" id="restriccion" name="restriccion" title="Marcar si la actividad va tener restriccion horaria" <?php echo $restriccion; ?>> &nbsp&nbsp&nbspRestriccion Horaria</label>

				</div>
				<div class="row <?php echo $vista;?>">  <!-- en funcion de los parametros se muestra o no -->

					<div class="col-xs-3">
						<select class="form-control" id="dia" placeholder="Dia">
							<option value="Lunes">Lunes</option>
							<option value="Martes">Martes</option>
							<option value="Miercoles">Miercoles</option>
							<option value="Jueves">Jueves</option>
							<option value="Viernes">Viernes</option>
							<option value="Sabado">Sabado</option>
							<option value="Domingo">Domingo</option>
						</select>
					</div>

					<div class="col-xs-3">
						<div class="input-group ">
							<input type="text" id="h_inicio" class="form-control"  placeholder="00:00"  maxlength="5" autocomplete="off"  title="HH:MM" >
							<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>


					<div class="col-xs-3">
						<div class="input-group ">
								<input type="text" id="h_fin"  class="form-control" placeholder="00:00" maxlength="5" autocomplete="off"  title="HH:MM">
								<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>

					<div class="col-xs-3">
						<button type="button" class=" btn btn-success" id="btt_horario">Añadir Horario</button>
					</div>
				</div>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr >
							<th class="col-md-3">Dia</th>
							<th class="col-md-3">H.inicio</th>
							<th class="col-md-3">H.fin</th>
							<th class="col-md-3"></th>
						</tr>
					</thead>
					<tbody id="c_tabla">
						
					</tbody>

				</table>
				<br>
				<br>
				<br>

				<input type="hidden" name="horario" id="horario" required>
				<?php 
					// si estamos en cualquier modo que no sea vista lo presentamos el boton, de otroa forma lo deshabilitamos
					if ($vista="") {

				?>		
				<button type="submit" id="enviar" name="enviar" class="btn btn-default <?php echo $vista ?>">Registrar</button>
				<?php }else { ?>
					<a class="btn btn-default" href="<?=$_SERVER['HTTP_REFERER'] ?>">Volver</a>
				<?php }


				?>
			</form>
		</div>
	</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	window.addEventListener ("load", inicio);
	// variables globales.
	var indice=0;
	var horarios = new Array();
		function valida(){
				if (document.getElementById('restriccion').checked && horarios.length==0)
				{
					alert (" Actividad tiene restriccion pero no tiene horarios");
					 event.preventDefault()
					return false;
				}


				if (confirm ("Desea enviar el formulario?")){

				}else {
					 event.preventDefault()
					return false;
				}
		}

		function addHorario () {
				
				var dia = document.getElementById('dia').value;
				var h_fin = document.getElementById('h_fin').value;
				var h_inicio= document.getElementById('h_inicio').value;
				 //comrpobamos que se haya introducido hora
				 if(h_fin=="" || h_inicio==""){
				 	alert ("Campo horas vacios.");
				 	return false;
				 }
				 // la hora tiene que tener un formato especifico para que lo coja la bbdd
				 var pattern = /^((0[0-9])|(1[0-9])|(2[0-3])):[0-5][0-9]$/;

				 if (!pattern.test(h_fin)){
				 	alert ("Hora fin no cumple formato, debe ser HH:MM");
				 	return false;
				 }
				 if (!pattern.test(h_inicio)){
				 	alert ("Hora inicio no cumple formato, debe ser HH:MM");
				 	return false;
				 }

				// añadimos el horario al array 	
				horarios.push([[dia],[h_inicio],[h_fin]]);
				//actualizar la tabla
				actualizaTabla();	
				// añadimos como json ( es un poco locura )pero ocupa menos que serializar
				var tmp =  JSON.stringify(horarios);
				console.log (tmp);
				document.getElementById('horario').value=tmp;


			}

		function actualizaTabla () {
				var cnt=0;	
				document.getElementById('c_tabla').innerHTML="";
				horarios.forEach (function (i) {
					
					var fila = "<tr><td>"+i[0]+"</td><td>"+i[1]+"</td><td>"+i[2]+"</td><td><button type='button' class='btn btn-danger btn-sm btn-block' onClick='borraElemento("+cnt+")'>borrar</button></td></tr>";
					document.getElementById('c_tabla').innerHTML += fila;	
					cnt++;	
				});
			
		}
		function borraElemento (e){
			if (confirm("Desea borrar elemento? " )){


			horarios.splice(e,1);
			actualizaTabla();
			}
		}	

	function inicio () {
		
		//document.getElementById("btt_horario").addEventListener ('click', addHorario);

		//document.getElementById("enviar").addEventListener("click",valida);
		
		// conseguir los datos del servidor horarios en modo vista /editar
		
		//var horario_tmp = <?php echo $horario?>;
		

		console.log  ("Estamos mostrando:"+"<?php echo $horario ?>");

		// if (Array.isArray(horario_tmp) ) {
		// 	//horarios = JSON.parse(horario_tmp);
		// 	horarios= horario_tmp;
			
		// 	actualizaTabla();
		// }
		// alert ("fuera")
	}

		
		

		

</script>

</body>
</html>