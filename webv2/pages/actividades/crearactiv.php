<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saya Club Sport</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/fontawesome-all.css">
	<script src="../../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/horarios.js"></script>
</head>
<body>
	<div class="row mt-3">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="../index.html" class="nav-link ">Inicio</a>
				</li>
				<li class="nav-item">
					<a href="actividades.php" class="nav-link active">Actividades</a>
				</li>
				<li class="nav-item">
					<a href="../socios/socios.php" class="nav-link ">Socios</a>
				</li>
				<li class="nav-item">
					<a href="../staff/staff.php" class="nav-link ">Staff</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Crear Actividad</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<form action="../../controllers/actividades/phpcrearacti.php" method="post">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="cuota">cuota</label>
						<input type="text" name="cuota" id="cuota" class="form-control">
					</div>
					<div class="form-check">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="restriccion" id="restriccion" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Restriccion Horaria</span>
						</label>
					</div>
					<div class="row">
						<div class="col-3">
							<select name="diasemana" id="diasemana" class="form-control select-picker">
								<option value="lunes">lunes</option>
								<option value="martes">martes</option>
								<option value="miercoles">miercoles</option>
								<option value="jueves">jueves</option>
								<option value="viernes">viernes</option>
								<option value="sabado">sabado</option>
								<option value="domingo">domingo</option>
							</select>
						</div>

						<div class="col-3">
							<div class="input-group">
								<input type="time" name="desdehora" id="desdehora">
								<span class="input-group-addon">
									<span class="fas fa-clock"></span>
								</span>
							</div>
						</div>
						<div class="col-3">
							<div class="input-group">
								<input type="time" name="hastahora" id="hastahora">
								<span class="input-group-addon">
									<span class="fas fa-clock"></span>
								</span>
							</div>
						</div>
						<div class="col-3">
							<input type="button" onclick="genera_tabla()" value="Añadir" name="add" class="btn btn-success">
						</div>
					</div>
					<br>
					<table class="table table-bordered">
						<th>Dia de la semana</th>
						<th>Inicio Horario</th>
						<th>Fin horario</th>
					</table>
					
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Registrar" name="registrar" class="btn btn-primary" >
			</div>
		</form>	
	</body>
	</html>