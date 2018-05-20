<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Saya Club Sport</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body>
  	    

  	    <div class="container">
  <h2>Actividad</h2>
  <div class="col-xs-6">
  <form action="/action_page.php">
    

 	<div class="form-group">
 		<label for="id_act"> Identificador Actividad</label>
 		<input type="text" class="form-control" id="id_act" name="id_act">
 	</div>

	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre" class="form-control">
	</div>
	<div class="form-group">
		<label for="cuota">Cuota</label>
		<input type="number" min="0" max="100" id="cuota" name="cuota" class="form-control">
	</div>
	<div class="form-group">
		<label for="cantidad">Cantidad</label>
		<input type="number" id="cantidad" name="cantidad" class="form-control">
	</div>
	<div class="form-group">

		<label for="restriccion"><input type="checkbox" id="restriccion" name="restriccion" > &nbsp&nbsp&nbspRestriccion Horaria</label>
		
	</div>
	<div class="form-row">
		
	 <div class="col-xs-3">
	 	 <select class="form-control" id="dia" placeholder="Dia">
	 			  <option value="Lunes">Lunes</option>
	 			  <option value="Martes">Martes</option>
	 			  <option value="Miercoles">Miercoles</option>
	 			  <option value="Jueves">Jueves</option>
	 			  <option value="Viernes">Viernes</option>
	 			  <option value="Sabado">Sabado</option>
	 			  <option value="Domingo">Domingo</option>
	 	</select>
	 </div>
	 <div class="col-xs-3 input-group clockpicker">
	 	<input type="text" id="h_inicio" class="form-control"  value="00:00" >
	 	 <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
<script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
	 </div>
	 <div class="col-xs-3">
	 	<input type="time" id="h_fin"  class="form-control" value="00:00" step="1">
	 </div>
	  
	<button type="button" class="col-xs-3 btn btn-default" id="btt_horario">Añadir Horario</button>
	</div>
<br>
<br>
<br>
		
 	
 	   <button type="submit" class="btn btn-default">Submit</button>
 	 </form>
 	</div>
 </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/clockpicker.js"></script>
  </body>
</html>