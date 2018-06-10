<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Actividad</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
	<script src="estilos/js/jquery-3.2.1.min.js"></script>
	<script src="estilos/js/popper.min.js"></script>
	<script src="estilos/js/bootstrap.min.js"></script>
	<script src="horarios.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Crear Actividad</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h6>Detalle de la actividad</h6>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="prueba.php" method="post">
					<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>"  class="form-control">
				</div>
				<div class="form-group">
					<label for="cuota">cuota</label>
					<input type="text" name="cuota" id="cuota" value="<?php if(isset($_POST['cuota'])) echo $_POST['cuota']; ?>"  class="form-control">
				</div>
				<div class="form-group">
					<label for="restriccion">restriccion horaria</label>
					<input type="checkbox" name="restriccion" id="restriccion" <?php if(isset($_POST['restriccion']) && $_POST['restriccion'] ) echo "checked"; ?>  class="form-control">
				</div>
				<div class="form-group">
					<label for="dia">Dia de la semana</label>
					<select name="dia" id="dia">
						<option value="lunes">lunes</option>
						<option value="martes">martes</option>
						<option value="miercoles">miercoles</option>
						<option value="jueves">jueves</option>
						<option value="viernes">viernes</option>
						<option value="sabado">sabado</option>
						<option value="domingo">domingo</option>
					</select>
				</div>
				<div class="form-group">
					<label for="desde">Desde</label>
					<input type="time" name="desde" id="desde">
				</div>
				<div class="form-group">
					<label for="hasta">hasta</label>
					<input type="time" name="hasta" id="hasta">
				</div>
				<div class="form-group">
					<input type="button" onclick="genera_tabla()" value="Añadir" name="add" class="btn btn-success">
				</div>
				<table class="table table-bordered">
					<th>Dia de la semana</th>
					<th>Inicio Horario</th>
					<th>Fin horario</th>
				</table>
				
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" name="json" id='json'>
			<input type="submit" value="Registrar" name="registrar" class="btn btn-primary" onclick="enviar()">
		</div>
		</form>
		<div class="row">
			<div class="col">
				
	
</body>
</html>