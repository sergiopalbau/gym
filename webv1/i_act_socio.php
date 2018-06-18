
<?php

// establecemos la fecha actual para poder guardar en la base de datos.
$fecha = date("Y-m-d");
//echo($fecha);


//echo "<br><hr> publicando el post .> ";
//print_r ($_POST);

if (isset ($_POST['dni']))
{
	$dni = $_POST['dni'];
	//echo  "<br>". $dni . "<br>";

	if (isset($_POST['actividad']))
	{
	//	echo $_POST['actividad']. " convirtiendo";
		$actividad = $_POST['actividad'];

		// pasamos por post algo como esto "['1','2']"" --> lo convertimos en "1,2"
		$mascara = array("[","]","'","\"");
		$actividad = str_replace ($mascara,"",$actividad);
		// lo convertimos en un array
		$actividad = explode (",",$actividad);
		//print_r($actividad);
		print_r ($actividad);

	}else{
		$actividad="";

	}
	

	//06/06/2015-----------------------------------------------------
	// buscamos todas las entradas para el dni
	require_once("Db.php");
	
	
	echo "<br>   <hr>";
	// busqueda de las actividades por dni
	$act_bbdd = Db::arrayBusqueda("act_socios","dni_socio",$dni);
	var_dump ($act_bbdd);

	// comprobamos si ha devuelto valores la busqueda, si no devuelve nada inplica que es la primera vez que se esta grabando.
	if (count($act_bbdd)==0){
		for ($i=0; $i<count($actividad); $i++)
		{
			$sql = "INSERT into act_socios values ('', 	
														'$actividad[$i]',
														'$dni',
														'$fecha',
														'')";
			echo "<br>" .$sql . "<br>";
			$respuesta =Db::ejecutaSentencia($sql);
			if ($respuesta==1) {
				echo "Actividad guardada correctamente";
			}
		}

	}else{
	

	// ahora tenemos dos arrays uno de la base de datos y otro que le hemos pasado por parametros... nos queda averiguar que diferencias hay. entre uno y otro. Si por parametros tenemos mas elementos habra que añadirlos a la base de datos. por el contrario si por el parametro hay menos elementos habra que poner fecha de finalizacion la actual.
	// añadir actividades
	for ($i=0; $i<count($actividad); $i++) 	
	{
		echo "/".$actividad[$i] . "/";
		for ($j=0; $j<count($act_bbdd); $j++)
		{
			if ($act_bbdd[$j]['f_fin']!="0000-00-00") // si la actividad tiene fecha fin, no hace falta comprobar nada
			{
				continue 2;	
			}
			if ($actividad[$i] == $act_bbdd[$j]['id_act'])
			{
				continue 2;
			}
				// echo "soy igual  " .$actividad[$i]. "-".  $act_bbdd[$j]['id_act'] . $act_bbdd[$j]['f_fin'] . "<br>";
				// if ($act_bbdd[$j]['f_fin']!="0000-00-00")
				// {
				

		}
		// si llega aqui implica que no hay coincidencias con esa actividad. hay que añadir a la tabla
		//tenemos que añadir a la bbdd
			$sql = "INSERT into act_socios values ('', 	
												'$actividad[$i]',
												'$dni',
												'$fecha',
												'')";
			echo "<hr><br> $sql <hr><br>"	;	
			$respuesta =Db::ejecutaSentencia($sql);
			
		}
	}
/*}--------------------------------------------------*/
//07/06/2018-----------------------------------------
// Como n podemos borrar las actividades si podemos darle fecha de finalizacion. esta rutina se encarga de eso.

for ($j=0; $j<count($act_bbdd); $j++)
		{
			if ($act_bbdd[$j]['f_fin']!="0000-00-00") // si la actividad tiene fecha fin, no hace falta comprobar nada
			{
				continue 1;	
			}

			for ($i=0; $i<count($actividad);$i++)
			{


				if ($actividad[$i] == $act_bbdd[$j]['id_act'])
				{
					continue 2;
				}
			}
			// --- si llegamos aqui significa que el usuario tiene una actividad sin fecha de terminar y que ademoas
			// no esta en la lista actual de actividades.Por lo tanto vamos a actualizar la fecha de esa actividad de la bbdd
			$sql= "UPDATE act_socios SET f_fin='$fecha' WHERE id= '".
			$act_bbdd[$j]['id']."'";

			$respuesta =Db::ejecutaSentencia($sql);

		}


}// fin if ($dni)



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="i_act_socio.php" method="post">
		<input type="hidden" name="dni" value="111">
		<input type="hidden" name="actividad" value="['1','4','5']">

		<input type="submit">
	</form>
	<a href="/phpmyadmin">phpmyadmin
	</a>
</body>
</html>

