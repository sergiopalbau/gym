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
						<a href="../actividades/actividades.php" class="nav-link">Actividades</a>
					</li>
					<li class="nav-item">
						<a href="../socios/socios.php" class="nav-link ">Socios</a>
					</li>
					<li class="nav-item">
						<a href="staff.php" class="nav-link active">Staff</a>
					</li>
				</ul>
			</div>
		</div>
	<div class="container">
		<div class="row my-2">
			<div class="col">
				<h2>Staff</h2>
			</div>
		</div>
		<div class="row my-2">
			<div class="col">
				<table id="tablon" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Id_Staff</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Tarjeta</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php require '../../controllers/staff/phpstaff.php'; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col">
				<a href="crearstaff.php" class="btn btn-success">Añadir Staff</a>
			</div>
		</div>
	</div>

</body>
</html>