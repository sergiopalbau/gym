<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Saya Club Sport</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

<body>


	<div class="container">
		<div class="row">
	  		  <ul class="nav nav-tabs">
			    <li><a href="index.php"  class="active">Home</a></li>
			    <li><a href="p_actividad.php">Actividad</a></li>
			    <li><a href="p_socio.php">Socio</a></li>
			    <li><a href="staff.php">Staff</a></li>
			  </ul>
		</div>
				

		<div class="row">
			<h2>Principal</h2>

			<?php

			$a = [	['id'=>"1","nombre"=>"sergio", "edad"=> 35],
					['id'=>"2","nombre"=>"luis", "edad"=> 12],
					['id'=>"3","nombre"=>"juan", "edad"=> 23],
					['id'=>"4","nombre"=>"mario", "edad"=> 43],	];
			print_r($a);
			echo "<br><hr>";

			unset ($a[0]);
			print_r($a);
			echo "<br><hr>";
			echo $a[1]['nombre'];

			// $a=Array
			// (
			//     [0] => Array
			//         (          			            
			         
			//             [id_act] => 1,
			//          [dni_socio] => 111
			            
			//             [f_inicio] => 2018-06-06
			            
			//             [f_fin] => 0000-00-00
			//         )

			//     [1] => Array
			//         (
			            
			//             [id] => 37
			            
			//             [id_act] => 4
			            
			//             [dni_socio] => 111
			            
			//             [f_inicio] => 2018-06-06
			            

			//             [f_fin] => 2018-06-07
			//         )

			//     [2] => Array
			//         (
			//             [0] => 38
			//             [id] => 38
			//             [1] => 5
			//             [id_act] => 5
			//             [2] => 111
			//             [dni_socio] => 111
			//             [3] => 2018-06-06
			//             [f_inicio] => 2018-06-06
			//             [4] => 2018-06-07
			//             [f_fin] => 2018-06-07
			//         )

			// );



?>













		</div>	