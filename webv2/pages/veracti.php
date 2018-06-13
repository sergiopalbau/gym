<!DOCTYPE html>
<html lang="en">
<head>
	<?php require '../controllers/phpveracti.php'; ?>
	<meta charset="UTF-8">
	<title>Ver actividad</title>
	<script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/popper.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
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
					<input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<label for="cuota">cuota</label>
					<input type="text" name="cuota" id="cuota" value="<?php echo $cuota; ?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<label for="restriccion">restriccion horaria</label>
					<input type="checkbox" name="restriccion" id="restriccion" <?php if($restriccion){echo "checked";} ?> disabled class="form-control">
				</div>
				<table class="table table-bordered">
					<th>Dia de la semana</th>
					<th>Inicio Horario</th>
					<th>Fin horario</th>
					<?php require '../controllers/verhorario.php' ?>
				</table>
				<a href='../pages/actividades.php' class='btn btn-danger '>Volver</a>
			</div>
		</div>
	</div>

</body>
</html>