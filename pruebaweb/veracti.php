<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'phpveracti.php'; ?>
	<meta charset="UTF-8">
	<title>Ver actividad</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
</head>
<body>
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
					<thead>
						<tr >
							<th>Dia</th>
							<th>H.inicio</th>
							<th>H.fin</th>
						</tr>

					</thead>
					<tbody id="c_tabla">
						
					</tbody>

				</table>
				<a href='actividades.php' class='btn btn-danger '>Volver</a>
			</div>
		</div>
	</div>
	<script src="estilos/js/bootstrap.min.js"></script>
	<script src="estilos/js/jquery-3.2.1.min.js"></script>
	<script src="estilos/js/popper.min.js"></script>
</body>
</html>