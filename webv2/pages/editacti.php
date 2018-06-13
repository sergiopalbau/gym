<!DOCTYPE html>
<html lang="es">
<head>
	<?php require '../controllers/phpeditacti.php'; ?>
	<meta charset="UTF-8">
	<title>Editar actividad</title>
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
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
					<form action="editacti.php" method="post">
		<div class="row">
			<div class="col">
				<h1>Actividad</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h3>Detalles</h3>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>"  class="form-control">
				</div>
				<div class="form-group">
					<label for="cuota">cuota</label>
					<input type="text" name="cuota" id="cuota" value="<?php echo $cuota; ?>"  class="form-control">
				</div>
				<div class="form-group">
					<label for="restriccion">restriccion horaria</label>
					<input type="checkbox" name="restriccion" id="restriccion" <?php if($restriccion){echo "checked";} ?>  class="form-control">
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
					<input type="button"  value="Añadir" name="add" class="btn btn-success" onclick="genera_tabla()" >
				</div>
				<table class="table table-bordered">
					<th>Dia de la semana</th>
					<th>Inicio Horario</th>
					<th>Fin horario</th>
					<?php require '../controllers/verhorario.php'; ?>

				</table>
				<input type="hidden" name="id" value=" <?php echo $id; ?> ">
				<div class="form-group">
					<input type="submit" value="actualizar" name="actualizar" class="btn btn-primary">
				
				<a href="actividades.php" class="btn btn-danger">Volver</a>
				<input type="submit" value="eliminar" name="eliminar" class="btn btn-warning text-right" >
				</div>
			</div>
		</div>
				</form>
	</div>

</body>
</html>