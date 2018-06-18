<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saya Club Sport</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<script src="../../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<?php require '../../controllers/socios/phpversocio.php'; ?>
</head>
<body>
	<div class="row mt-3">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="../index.html" class="nav-link ">Inicio</a>
				</li>
				<li class="nav-item">
					<a href="../actividades/actividades.php" class="nav-link ">Actividades</a>
				</li>
				<li class="nav-item">
					<a href="socios.php" class="nav-link active">Socios</a>
				</li>
				<li class="nav-item">
					<a href="../staff/staff.php" class="nav-link ">Staff</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row my-3">
			<div class="col">
				<h2>Staff</h2>
			</div>
		</div>
		<fieldset>
			<legend> Datos personales</legend>
			<hr> 
			<div class="row">
				<div class="col-10">
					<div class="row">
						<div class="form-group col-2">
							<label for="dni">Dni</label>
							<input type="text" readonly name="dni" id="dni" class="form-control" value="<?php echo $dni ; ?>">
						</div>
						<div class="form-group col-3 col-md-offset-2">
							<label for="fecha">fecha de nacimiento</label>
							<input type="date" readonly name="fecha" id="fecha" class="form-control" value="<?php echo $nacimiento ; ?>">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-4">
							<label for="nombre">Nombre</label>
							<input type="text" readonly name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ; ?>">
						</div>
						<div class="form-group col-4">
							<label for="apellido1">Primer apellido</label>
							<input type="text" readonly name="apellido1" id="apellido1" class="form-control" value="<?php echo $apellido1 ; ?>">
						</div>
						<div class="form-group col-4">
							<label for="apellido2">Segundo apellido</label>
							<input type="text" readonly name="apellido2" id="apellido2" class="form-control" value="<?php echo $apellido2 ; ?>">
						</div>
					</div>
				</div>
				<div class="col-2 align-items-center">
					<img src="../../assets/img/hombre.png"class="rounded-circle" style="width:100%" alt="">
				</div>
			</div>
		</fieldset>
		<br><br>
		<fieldset>
			<legend>Datos de contacto</legend>
			<hr>
			<div class="row">
				<div class="form-group col-4">
					<label for="direccion">direccion</label>
					<input type="text" readonly name="direccion" id="direccion" class="form-control" value="<?php echo $direccion ; ?>">
				</div>
				<div class="form-group col-4">
					<label for="email">Email</label>
					<input type="email" readonly name="email" id="email" class="form-control" value="<?php echo $email ; ?>">
				</div>
				<div class="form-group col-4">
					<label for="telefono">Telefono</label>
					<input type="tel" readonly name="telefono" id="telefono" class="form-control" value="<?php echo $telefono ; ?>">
				</div>
			</div>
		</fieldset>
		<br><br>
		<fieldset>
			<legend>Relacion con el Club</legend>
			<div class="row">
				<div class="form-group col-2">
					<label for="inscripcion">Fecha de inscripcion</label>
					<input type="date" readonly name="inscripcion" id="inscripcion" class="form-control" value="<?php echo $inscripcion ; ?>">
				</div>
				<div class="form-group col-2">
					<label for="tarjeta">tarjeta</label>
					<input type="text" readonly name="tarjeta" id="tarjeta" class="form-control" value="<?php echo $tarjeta ; ?>">
				</div>
				<div class="form-group col-1">
					<label for="cuota">Cuota</label>
					<input type="text" readonly name="cuota" id="cuota" class="form-control" value="<?php echo $cuota ; ?>">
				</div>
				<div class="form-group col-2">
					<label for="restriccion">Restriccion</label>
					<input type="text" name="restriccion" id="restriccion" value = "No" readonly class="form-control">
				</div>
				<div class="form-group col-2">
					<label for="corriente">corriente de pago</label>
					<input type="text" name="corriente" id="corriente" value = "<?php echo $corriente; ?>" readonly class="form-control">
				</div>

			</div>
		</fieldset>
		<br><br>
		<fieldset>
			<legend>Actividades</legend>
			<div class="row">
				<div class="form-group col-6">
					<table class="table table-bordered">
						<th class="text-center">Actividad</th>
						<th class="text-center">Opciones</th>
						<?php require '../../controllers/phpveractividad.php'; ?>
					</table>
				</div>
			</div>
		</fieldset>
		<div class="row justify-content-between">
			<div class="col-3 text-right">
				<a href="socios.php" class="btn btn-danger">Volver</a>
			</div>
		</div>
	</div>

	
</body>
</html>