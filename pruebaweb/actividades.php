<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actividades</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Actividades</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h3>Actividad</h3>
				<h6>Detalle de las actividades</h6>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a href="crearactiv.php" class="btn btn-success">Crear actividad</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="card-columns">
					<?php require 'phpactiv.php' ?>
				</div>
			</div>
		</div>
	</div>
	<script src="estilos/js/bootstrap.min.js"></script>
	<script src="estilos/js/jquery-3.2.1.min.js"></script>
	<script src="estilos/js/popper.min.js"></script>
</body>
</html>