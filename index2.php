<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>hola gym</h1>
	<button id="btt">Boton</button>
	<input type="text" id="id_act" name="id_act" placeholder="id_act">id_act</input>
	<input type="text" id="dni_socio" name="dni_socio" placeholder="dni_socio">dni_socio</input>
	<input type="date" id="f_inicio" name="f_inicio" placeholder="f_inicio">f_inicio</input>
	<input type="date" id="f_fin" name="f_fin" placeholder="f_fin">f_fin</input>
	<br>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	alert("listo");
    $("#btt").click(function(){
    	var id = $('#id_act').val();
    	var dni= $('#dni_socio').val();
    	var fi = $('#f_inicio').val();
    	var ff = $('#f_fin').val();
    	 alert (id + " " + dni + " " + fi + " "+ ff);
    	$.post("i_act_socio.php",
    	{
    		 id_act: id,
    		 dni_socio: dni,
    		 fechaI: fi,
    		 fechaF: ff
    	}, function (resultado){
    		alert (resultado);
    	});
        
        });
    });

</script>

</body>
</html>