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
	<?php require '../controllers/phpverstaff.php'; ?>
</head>
<body>
	<div class="row mt-3">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="index.html" class="nav-link ">Inicio</a>
				</li>
				<li class="nav-item">
					<a href="actividades.php" class="nav-link ">Actividades</a>
				</li>
				<li class="nav-item">
					<a href="socios.php" class="nav-link ">Socios</a>
				</li>
				<li class="nav-item">
					<a href="staff.php" class="nav-link active">Staff</a>
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
								<input type="text" name="dni" id="dni" class="form-control" value ="<?php echo $dni; ?>" readonly>
							</div>
							<div class="form-group col-3 col-md-offset-2">
								<label for="tarjeta">Tarjeta</label>
								<input type="text" name="tarjeta" id="tarjeta" class="form-control" value ="<?php echo $tarjeta; ?>" readonly>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-4">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" value ="<?php echo $nombre; ?>" readonly>
							</div>
							<div class="form-group col-4">
								<label for="apellido1">Primer apellido</label>
								<input type="text" name="apellido1" id="apellido1" class="form-control" value ="<?php echo $apellido1; ?>" readonly>
							</div>
							<div class="form-group col-4">
								<label for="apellido2">Segundo apellido</label>
								<input type="text" name="apellido2" id="apellido2" class="form-control" value ="<?php echo $apellido2; ?>" readonly>
							</div>
						</div>
					</div>
					<div class="col-2 align-items-center">
						<img src="../assets/img/hombre.png"class="rounded-circle" style="width:100%" alt="">
					</div>
				</div>
			</fieldset>
			<br><br>
			<fieldset>
				<legend>Datos de contacto</legend>
				<hr>
				<div class="row">
					<div class="form-group col-4">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" readonly>
					</div>
					<div class="form-group col-4">
						<label for="telefono">Telefono</label>
						<input type="tel" name="telefono" id="telefono" class="form-control" readonly>
					</div>
					<div class="form-group col-4">
						<label for="perfil">Perfil</label>
						<input type="text" name="perfil" id="perfil" value ="<?php echo $perfil; ?>" readonly class="form-control">
					</div>
				</div>
			</fieldset>
			<br><br>
			<div class="row justify-content-between">
				<div class="col-3 ">
					<a href="staff.php" class="btn btn-danger">Volver</a>
				</div>
			</div>
	</div>
	
</body>
</html>