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
	<?php require '../controllers/phpeditstaff.php'; ?>
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
		<form action="../controllers/phpeditstaff.php" method="post">
			<fieldset>
				<legend> Datos personales</legend>
				<hr>
				<div class="row">
					<div class="col-10">
						<div class="row">
							<div class="form-group col-2">
								<label for="dni">Dni</label>
								<input type="text" name="dni" id="dni" class="form-control" required value="<?php echo $dni; ?>" readonly>
							</div>
							<div class="form-group col-3 col-md-offset-2">
								<label for="tarjeta">Tarjeta</label>
								<input type="text" name="tarjeta" id="tarjeta" class="form-control" required value="<?php echo $tarjeta; ?>">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-4">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" required value="<?php echo $nombre; ?>">
							</div>
							<div class="form-group col-4">
								<label for="apellido1">Primer apellido</label>
								<input type="text" name="apellido1" id="apellido1" class="form-control" required value="<?php echo $apellido1; ?>">
							</div>
							<div class="form-group col-4">
								<label for="apellido2">Segundo apellido</label>
								<input type="text" name="apellido2" id="apellido2" class="form-control" value="<?php echo $apellido2; ?>">
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
						<input type="email" name="email" id="email" class="form-control" >
					</div>
					<div class="form-group col-4">
						<label for="telefono">Telefono</label>
						<input type="tel" name="telefono" id="telefono" class="form-control" >
					</div>
					<div class="form-group col-4">
						<br>
						<label for="perfil">Perfil</label>
						<select name="perfil" id="perfil" class="custom-select">
							<option value="admin"  <?php if($perfil == 'admin'){echo 'selected'; } ?> >admin</option>
							<option value="monitor"  <?php if($perfil == 'monitor'){echo 'selected'; } ?> >monitor</option>
							<option value="recepcion"  <?php if($perfil == 'recepcion'){echo 'selected'; } ?> >recepcion</option>
							<option value="limpieza"  <?php if($perfil == 'limpieza'){echo 'selected'; } ?> >limpieza</option>
							<option value="temporal" <?php if($perfil == 'temporal'){echo 'selected'; } ?> >temporal</option>
						</select>
						<input type="hidden" name="id" value="<?php echo $id; ?>" id="id">
					</div>
				</div>
			</fieldset>
			<br><br>
			<div class="row justify-content-between">
				<div class="col-3">
					<input type="submit" value="registrar" name="registrar" id="registrar" class="btn btn-primary">
				</div>
				<div class="col-3 text-right">
					<a href="staff.php" class="btn btn-danger">Volver</a>
					<input type="submit" value="eliminar" name="eliminar" id="eliminar" class="btn btn-secondary">
				</div>
			</div>
			
		</form>
	</div>
	
</body>
</html>