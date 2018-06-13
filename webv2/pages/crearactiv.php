<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saya Club Sport</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/horarios.js"></script>
</head>
<body>
	<div class="row mt-3">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="index.html" class="nav-link ">Inicio</a>
				</li>
				<li class="nav-item">
					<a href="actividades.php" class="nav-link active">Actividades</a>
				</li>
				<li class="nav-item">
					<a href="socios.php" class="nav-link ">Socios</a>
				</li>
				<li class="nav-item">
					<a href="staff.php" class="nav-link ">Staff</a>
				</li>
			</ul>
		</div>
	</div>
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
				<form action="../controllers/phpcrearacti.php" method="post">
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
					<label for="diasemana">Dia de la semana</label>
					<select name="diasemana" id="diasemana">
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
					<label for="desdehora">Desde</label>
					<input type="time" name="desdehora" id="desdehora">
				</div>
				<div class="form-group">
					<label for="hastahora">hasta</label>
					<input type="time" name="hastahora" id="hastahora">
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
			<input type="submit" value="Registrar" name="registrar" class="btn btn-primary" >
		</div>
		</form>
		<div class="row">
			<div class="col">
				<?php require '../controllers/phpcrearacti.php'; ?>
			</div>
		</div>
				
	
</body>
</html>