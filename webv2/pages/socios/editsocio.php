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
	<script src="../../assets/js/electacti.js"></script>
	<?php require '../../controllers/socios/phpeditsocio.php'; ?>
</head>
<body>
	<form action="../../controllers/socios/phpeditsocio.php" method="post" enctype="multipart/form-data">
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
							<input type="date"  name="fecha" id="fecha" class="form-control" value="<?php echo $nacimiento ; ?>">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-4">
							<label for="nombre">Nombre</label>
							<input type="text"  name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ; ?>">
						</div>
						<div class="form-group col-4">
							<label for="apellido1">Primer apellido</label>
							<input type="text"  name="apellido1" id="apellido1" class="form-control" value="<?php echo $apellido1 ; ?>">
						</div>
						<div class="form-group col-4">
							<label for="apellido2">Segundo apellido</label>
							<input type="text"  name="apellido2" id="apellido2" class="form-control" value="<?php echo $apellido2 ; ?>">
						</div>
					</div>
				</div>
				<div class="col-2 align-items-center">
					<img src="<?php echo $uri_foto; ?>" class="profile rounded" style="width:150px;height:150px;" alt="foto" id="imagen">
						<input type="file" name="foto" id="foto" accept="image/png, .jpeg, .jpg, image/gif" onchange="loadFile(event)" required>
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
					<input type="text"  name="direccion" id="direccion" class="form-control" value="<?php echo $direccion ; ?>">
				</div>
				<div class="form-group col-4">
					<label for="email">Email</label>
					<input type="email"  name="email" id="email" class="form-control" value="<?php echo $email ; ?>">
				</div>
				<div class="form-group col-4">
					<label for="telefono">Telefono</label>
					<input type="tel"  name="telefono" id="telefono" class="form-control" value="<?php echo $telefono ; ?>">
				</div>
			</div>
		</fieldset>
		<br><br>
		<fieldset>
			<legend>Relacion con el Club</legend>
			<div class="row">
				<div class="form-group col-2">
					<label for="inscripcion">Fecha de inscripcion</label>
					<input type="date"  name="inscripcion" id="inscripcion" class="form-control" value="<?php echo $inscripcion ; ?>">
				</div>
				<div class="form-group col-2">
					<label for="tarjeta">tarjeta</label>
					<input type="text"  name="tarjeta" id="tarjeta" class="form-control" value="<?php echo $tarjeta ; ?>">
				</div>
				<div class="form-group col-1">
					<label for="cuota">Cuota</label>
					<input type="text"  name="cuota" id="cuota" class="form-control" value="<?php echo $cuota ; ?>">
				</div>
				<div class="form-group col-2">
					<label for="restriccion">Restriccion</label>
					<input type="text" name="restriccion" id="restriccion" value = "No"  class="form-control">
				</div>
				<div class="form-group col-2">
					<label for="corriente">corriente de pago</label>
					<input type="text" name="corriente" id="corriente" value = "<?php echo $corriente; ?>"  class="form-control">
				</div>

			</div>
		</fieldset>
		<br><br>
		<fieldset>
			<legend>Actividades</legend>
			<div class="row">
				<?php require '../../controllers/phpdescacti.php'; ?>
					<div class="form-group col-4 ">
						<br>
						<select name="actividad" id="actividad" class="form-control select-picker">
							<option value="total">Total</option>
							<option value="mañanas">Mañanas</option>
							<option value="tardes">Tardes</option>
							<?php 
							for ($i = 0;$i < count($actis); $i++ ) {
								print("<option value='".$actis[$i]."'>".$actis[$i]."</option>");
							}
							?>
						</select>
					</div>
					<div class="form-group col-2">
						<br>
						<button type="button" onclick="add()" class="btn btn-success" >Añadir</button>
					</div>
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
			<div class="col-3">
				<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
				<input type="submit" value="actualizar" name="actualizar" id="actualizar" class="btn btn-primary">
				</div>
				<div class="col-3 text-right">
					<a href="socios.php" class="btn btn-danger">Volver</a>
					<input type="submit" value= "eliminar" name = "eliminar" class="btn btn-secondary">
				</div>
		</div>
	</div>

	</form>
</body>
</html>