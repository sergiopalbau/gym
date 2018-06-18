<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saya Club Sport</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/datatables.min.css"/>
	<script type="text/javascript" src="../../assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../assets/js/popper.min.js"></script>
	<script type="text/javascript" src="../../assets/js/datatables.min.js"></script>
	<script type="text/javascript" src="../../assets/js/tabla.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
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
				<h2>Actividades</h2>
			</div>
		</div>
		<div class="row my-2">
			<div class="col">
				<table id="tablon" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Id_Actividad</th>
							<th>Nombre</th>
							<th>Cuota</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php require '../../controllers/actividades/phpactiv.php'; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col">
				<a href="crearactiv.php" class="btn btn-success">Crear actividad</a>
			</div>
		</div>
	</div>
</body>
</html>