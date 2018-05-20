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
		<h2>Actividad</h2>
		<div class="col-md-6">
			<form action="/action_page.php">


				<div class="form-group">
					<label for="id_act"> Identificador Actividad</label>
					<input type="text" class="form-control" id="id_act" name="id_act">
				</div>

				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" id="nombre" name="nombre" class="form-control">
				</div>
				<div class="form-group">
					<label for="cuota">Cuota</label>
					<input type="number" min="0" max="100" id="cuota" name="cuota" class="form-control">
				</div>
				<div class="form-group">
					<label for="cantidad">Cantidad</label>
					<input type="number" id="cantidad" name="cantidad" class="form-control">
				</div>
				<div class="form-group">

					<label for="restriccion"><input type="checkbox" id="restriccion" name="restriccion" > &nbsp&nbsp&nbspRestriccion Horaria</label>

				</div>
				<div class="row">

					<div class="col-md-3">
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

					<div class="col-md-3">
						<div class="input-group col">
							<input type="text" id="h_inicio" class="form-control"  placeholder="00:00" pattern="^$|^(([01][0-9])|(2[0-3])):[0-5][0-9]$" title="HH:MM" >
							<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>


					<div class="col-md-3">
						<div class="input-group ">
								<input type="text" id="h_fin"  class="form-control" placeholder="00:00" pattern="^$|^(([01][0-9])|(2[0-3])):[0-5][0-9]$" title="HH:MM">
								<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>

					<div class="col-md-3">
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


				<button type="submit" class="btn btn-default">Submit</button>
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

	function addHorario () {
			
			var dia = document.getElementById('dia').value;
			var h_fin = document.getElementById('h_fin').value;
			var h_inicio= document.getElementById('h_inicio').value;
			
			horarios.push([[dia],[h_inicio],[h_fin]]);
			actualizaTabla();		

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
			horarios.splice(e,1);
			actualizaTabla();
		}	

	function inicio () {
		
		document.getElementById("btt_horario").addEventListener ('click', addHorario);
		

		
		

		
}


</script>
</body>
</html>