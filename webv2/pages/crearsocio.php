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
	<script src="../assets/js/electacti.js"></script>
	<?php require '../controllers/phpcrearsocio.php'; ?>
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
					<a href="socios.php" class="nav-link active">Socios</a>
				</li>
				<li class="nav-item">
					<a href="staff.php" class="nav-link ">Staff</a>
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
		<form action="../controllers/phpcrearsocio.php" method="post">
			<fieldset>
				<legend> Datos personales</legend>
				<hr>
				<div class="row">
					<div class="col-10">
						<div class="row">
							<div class="form-group col-2">
								<label for="dni">Dni</label>
								<input type="text" name="dni" id="dni" class="form-control" required>
							</div>
							<div class="form-group col-3 col-md-offset-2">
								<label for="fecha">fecha de nacimiento</label>
								<input type="date" name="fecha" id="fecha" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-4">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" required>
							</div>
							<div class="form-group col-4">
								<label for="apellido1">Primer apellido</label>
								<input type="text" name="apellido1" id="apellido1" class="form-control" required>
							</div>
							<div class="form-group col-4">
								<label for="apellido2">Segundo apellido</label>
								<input type="text" name="apellido2" id="apellido2" class="form-control">
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
						<label for="direccion">direccion</label>
						<input type="text" name="direccion" id="direccion" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
					<div class="form-group col-4">
						<label for="telefono">Telefono</label>
						<input type="tel" name="telefono" id="telefono" class="form-control">
					</div>
				</div>
			</fieldset>
			<br><br>
			<fieldset>
				<legend>Relacion con el Club</legend>
				<div class="row">
					<div class="form-group col-2">
						<label for="inscripcion">Fecha de inscripcion</label>
						<input type="date" name="inscripcion" id="inscripcion" class="form-control">
					</div>
					<div class="form-group col-2">
						<label for="tarjeta">tarjeta</label>
						<input type="text" name="tarjeta" id="tarjeta" class="form-control">
					</div>
					<div class="form-group col-2">
						<label for="cuota">Cuota</label>
						<input type="number" name="cuota" id="cuota" class="form-control" >
					</div>
					<div class="form-group col-2">
						<label for="restriccion">Restriccion</label>
				    <select class="form-control select-picker" id="restriccion" name="restriccion">
				      <option value="0">no</option>
				      <option value="1">si</option>
				    </select>
  				</div>
  				<div class="form-group col-2">
  					<label for="corriente">corriente de pago</label>
				    <select class="form-control select-picker" id="corriente" name="corriente">
				      <option value="0" >no</option>
				      <option value="1" >si</option>
				    </select>
				  </div>

				</div>
			</fieldset>
			<br><br>
				<fieldset>
					<legend>Horarios</legend>
			<div class="row">
				<?php require '../controllers/phpdescacti.php'; ?>
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

						</table>
					</div>
			</div>
				</fieldset>
				<br><br>
			<div class="row justify-content-between">
				<div class="col-3">
					<input type="submit" value="registrar" name="registrar" id="registrar" class="btn btn-primary">
				</div>
				<div class="col-3 text-right">
					<a href="socios.php" class="btn btn-danger">Volver</a>
				</div>
			</div>
			
		</form>
	</div>
	
</body>
</html>