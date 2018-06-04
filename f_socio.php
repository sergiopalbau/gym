<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <div class="page-header">
    <title>Saya Club Sport</title>
  </div>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
  <?php 
  require_once ("Db.php");
    // elegios el modo en presentar el formulario vista, editar, nuevo  
    $vista="form";    // segun se pase por get puede haber 3 modos, formulario(form), editar(edit), o vista ()
    
    //variables globales

    $dni_socio="";
    $nombre="";
    $apellido1="";
    $apellido2="";
    $direccion="";
    $telefono="";
    $email="";
    $fecha_nacimiento="";
    $fecha_inscripcion="";
    $cuota="";
    $corriente_pago="";
    $uid3="";
    $uri_foto="";



    $habilitacion="disabled" ;//para el formulario de activdades
    $btt_ctrl=""; // estado de los botones enabled/disabled
    $div_ctrl=""; // ocultamiento de div hide
    $readOnly="";
    if (isset ($_GET['dni_socio'])){

            $vista=$_GET['m'];
            if ($vista=='v'){   //modo ver

             $vista = "vista";
             $btt_ctrl="disabled";
             $div_ctrl="hide";

           }elseif ($vista="e"){
            $vista="editar";
            $habilitacion="";
            $readOnly="readonly";
          }

            // si mandamos por get una id. la buscamos en la base de datos,

          $rawData2=Db::ArrayElemento ("socios","dni_socio",$_GET['dni_socio']);
          if (is_null($rawData2))
          {
            echo "</head><body><h1> El elemento que busca no existe</h1><br><br><a href='p_actividad.php'>[Volver]</a></body></html>";
            exit;
          }
            // esto hay que borrar

          print_r($rawData2);  
            //--------------------
          /* desmierde total ---- si ha datos los cargamos en su variable para mostrar en el formulario */
          if (isset($rawData2['dni_socio'])){ $dni_socio =$rawData2['dni_socio']; }else {$dni_socio ="";};
          if (isset($rawData2['nombre'])){ $nombre =$rawData2['nombre']; }else {$nombre="";};
          if (isset($rawData2['apellido1'])){ $apellido1 =$rawData2['apellido1']; }else {$apellido1="";};
          if (isset($rawData2['apellido2'])){ $apellido2 =$rawData2['apellido2']; }else {$apellido2="";};
          if (isset($rawData2['direccion'])){ $direccion =$rawData2['direccion']; }else {$direccion="";};
          if (isset($rawData2['telefono'])){ $telefono =$rawData2['telefono']; }else {$telefono="";};
          if (isset($rawData2['email'])){ $email =$rawData2['email'];} else{ $email="";};
          if (isset($rawData2['fecha_nacimiento'])){ $fecha_nacimiento =$rawData2['fecha_nacimiento'];} else{ $fecha_nacimiento="";};
          if (isset($rawData2['fecha_inscripcion'])){ $fecha_inscripcion =$rawData2['fecha_inscripcion']; }else {$fecha_inscripcion="";};
          if (isset($rawData2['cuota'])){ $cuota =$rawData2['cuota'];} else{ $cuota="";};
          if (isset($rawData2['corriente_pago'])){ $corriente_pago =$rawData2['corriente_pago']; }else {$corriente_pago="";};
          if (isset($rawData2['uid3'])){ $uid3 =$rawData2['uid3'];} else{ $uid3="";};
          if (isset($rawData2['uri_foto'])){ $uri_foto =$rawData2['uri_foto'] ;}else {$uri_foto="";};
  }
      //--------------------------------------

  echo "<br>*  $dni_socio ";
  echo "<br>*  $nombre ";
  echo "<br>* $apellido1 ";
  echo "<br>*  $apellido2 ";
  echo "<br>* $direccion ";
  echo "<br>* $telefono ";
  echo "<br>*  $email ";
  echo "<br>*  $fecha_nacimiento ";
  echo "<br>*  $fecha_inscripcion ";
  echo "<br>*  $cuota ";
  echo "<br>*  $corriente_pago ";
  echo "<br>*  $uid3 ";
  echo "<br>* $uri_foto ";


  ?>


</head>
<body>


  <div class="container">
    <div class="page-header">
      <h1>Saya Club Sport</h1>
    </div>
    <div class="">

      <ul class="nav nav-tabs">
        <li><a href="index.php">Home</a></li>
        <li><a href="p_actividad.php">Actividad</a></li>
        <li class="active"><a href="p_socio.php">Socio</a></li>
        <li><a href="staff.php">Staff</a></li>
      </ul>
    </div>


    <div class="">
      <h2>Socio</h2>
    </div>
    <form action="i_socio.php" method="post">
      <fieldset>
       <legend> Datos personales</legend>
       <div class="row">
         <div class="col-xs-10">
           <div class="row">
            <div class="form-group col-xs-2 ">
             <label for="dni"> Dni</label>
             <input  class="form-control" type="text" id="dni" name="dni"size="20" value="<?php echo $dni_socio;?>" <?php echo $readOnly; ?>>
           </div>
           <div class="form-group col-xs-3 col-md-offset-2">
             <label for="fecha_nacimiento"> Fecha nacimiento</label>
             <input  class="form-control" type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento;?>">
           </div>
         </div>
         <div class="row">
          <div class="form-group col-xs-4">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo    $nombre;?>">
          </div>
          <div class="form-group col-xs-4">
           <label for="Apellido1">Apellido1</label>
           <input type="text" class="form-control" name="apellido1"  id="apellido1" value="<?php echo $apellido1;?>">
         </div>
         <div class="form-group col-xs-4">
           <label for="Apellido2">Apellido2</label>
           <input type="text" name="apellido2"  id="apellido2"class="form-control" value="<?php echo $apellido2;?>">
         </div>
       </div>

     </div>
     <div class="col-xs-2 align-items-center">
       <img src="img/hombre.png"class="img-circle" style="width:100%" alt="">
     </div>
   </div>



 </fieldset>
 <br><br>
 <fieldset>
  <legend>Datos de contacto</legend>
  <div class="row">
    <div class="form-group col-xs-4">
      <label for="Direccion">Direccion</label>
      <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $direccion;?>">
    </div>

    
    <div class="form-group col-xs-4">        
     <label for="email">email:</label>
     <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
   </div>
   <div class="form-group col-xs-4">
    <label for="telefono">Telefono</label>
    <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono;?>">
  </div>

</div>
</fieldset>
<br><br>
<fieldset>
 <legend>Relacion con club</legend>
 <div class="row">
  <div class="form-group col-xs-2"><label for="fecha_inscripcion">fecha_inscripcion</label><input type="date" id="fecha_inscripcion" name="fecha_inscripcion" class="form-control" value="<?php echo $fecha_inscripcion;?>"></div>
  <div class="form-group col-xs-2"><label for="tarjeta">tarjeta</label><input type="text" id="tarjeta" name="tarjeta" class="form-control" value="<?php echo $uid3;?>"></div>
  <div class="form-group col-xs-1"><label for="cuota">cuota</label><input type="text" id="cuota" name="cuota" class="form-control" value="<?php echo $cuota;?>"></div>
  <div class="form-group col-xs-2"><label for="restriccion">Restriccion</label>
    <select class="form-control select-picker" id="restriccion" name="restriccion">
      <option value="0" selected>no</option>
      <option value="1">si</option>
    </select>

  </div>

  <div class="form-group col-xs-2"><label for="corriente_pago">corriente_pago</label>
    <select class="form-control select-picker" id="corriente_pago" name="corriente_pago">
      <option value="0" >no</option>
      <option value="1"selected>si</option>
    </select>

  </div>
</div>

</fieldset>  
<br><br>
<div class="row">

  <fieldset <?php echo $habilitacion ?> >

           <?php  // descargamos todas las actividades .... y las presentamos en un multiple select
               //  require_once ("Db.php");  
           $rawdata =Db::arrayTabla('actividad');
           //       print_r ($rawdata);

           ?>  
           <div class="form-group col-xs-4">
            <label for="actividad">Seleccione Actividad/Actividades</label>
            <select class="select-picker form-control"  id="listaAct" height="300px" multiple>
              <?php foreach ($rawdata as $e){
                echo "<option value='$e[0]'>$e[0] - $e[1]-($e[2]) </option>";
              }

              ?>
            </select>
            <br>

          </div>
          <div class="form-group col-xs-2">
            &nbsp
            <button type ="button" class="btn-block btn btn-success" id="addact">Añadir Actividad >></button>&nbsp

            <button type ="button" class="btn-block btn btn-danger" id="subact"> << Quitar Actividad</button>
          </div>
          <div class="form-group col-xs-4">
            <label for="actividad">Seleccione Actividad/Actividades</label>
            <select class="select-picker form-control" name=actividad2[] id="listaAct2" multiple> 
            </select>
            <br>            
          </div>
          <div class="form-group col-xs-2"> 
            &nbsp
            <button type="button" class="btn btn-block btn-default" id="calcula" title="En funcion de las actividades se calcula la Couta"> Calcular cuota</button>  
            <button type="button" class="btn btn-block btn-default" id="bbdd_act" title="Las actividades estan almacenadas a parte, pulsa para guardar"> Guarda Actvidades</button>  
          </div>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        <!-- ---------------------- -->
        <?php 
          // si estamos en cualquier modo que no sea vista lo presentamos el boton, de otroa forma lo deshabilitamos
        if ($vista=="form") {

          ?>    
          <button type="submit" id="enviar" name="enviar" class="btn btn-default">Registrar</button>
        <?php }elseif( $vista=="vista") { ?>
          <a class="btn btn-default" href="<?=$_SERVER['HTTP_REFERER'] ?>">Volver</a>
        <?php }elseif ( $vista=="editar"){?>
          <input type="hidden" name="actualiza" value="<?php echo $_GET['dni_socio'] ?>">
          <button type="submit" id="enviar" name="enviar" class="btn btn-default">Registrar</button>
          <a class="btn btn-default" href="<?=$_SERVER['HTTP_REFERER'] ?>">Volver</a>


        <?php }


        ?>

        <!--   <button type="submit" id="enviar" class="btn btn-default">Submit</button> -->
      </div>
    </form>

  </div> <!-- div contanier -->






<!-- 
  ------------------------------------------------------------ -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <script>
    window.addEventListener("load", inicio);
    var actividad2= new Array();
  //----------------------------------------------------------------------------------
  function insertaAct() {
    var lista=document.getElementById('listaAct');
    var lista2=document.getElementById('listaAct2');


    var fin=lista.length;
    for (var i=0; i<fin; i++)
    {
      if (lista[i].selected)
      {
        lista2.innerHTML += '<option value="'+lista[i].value+'">'+lista[i].label+'</option>'
        lista.remove(i);
      } 
    }

  }
  //---------------------------------------------------------------------------------------  
  function quitaAct (){
    var lista=document.getElementById('listaAct');
    var lista2=document.getElementById('listaAct2');
    var fin=lista2.length;
    for (var i=0; i<fin; i++)
    {
      if (lista2[i].selected)
      {
        lista.innerHTML += '<option value="'+lista2[i].value+'">'+lista2[i].label+'</option>'
        lista2.remove(i);
      } 
    }


  }
  //--------------------------------------------------------------------------------------
  function calcular () {
    var lista2=document.getElementById('listaAct2');
    var fin=lista2.length;
    var cuota=0;
    for (var i=0; i<fin; i++){
     console.log ((lista2[i].text.substr(-3,2)));
     cuota += parseFloat(lista2[i].text.substr(-3,2));
     console.log (cuota);

   }
   document.getElementById('cuota').value= cuota;

 }
  //-------------------------------------------------------------------------------------
  function valida (event) {
    var f = document.forms[0].getElementsByTagName('input');
    for (var i=0; i<f.length;i++)
    {
      console.log (f[i] + " " + f[i].value);
      if (f[i].value=="")
      {
        f[i].focus();
        alert("Campos vacios, rellene los datos necesarios");
        event.preventDefault();
        return false;

      }

    }

  }

  function guarda_act(event){
    console.log ("dentro de guardar actividad");
    var dni= document.getElementById('dni').value;
    var lista2=document.getElementById('listaAct2');
    var fin=lista2.length;
    var actividad = new Array ();
    // guardamos las actvidades habilitadas en un array
    for (var i=0; i<fin; i++)
    {
      console.log (lista2[i].value);
      actividad.push (lista2[i].value);
      
    }
    console.log ("resultado "+  JSON.stringify(actividad));
    // mandamo por ajax la informacion resultante
    $.post("i_act_socio.php", 
    {
      'dni': dni,
      'actividad': JSON.stringify(actividad),
    },

    function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
/*
    $.post("demo_test_post.asp",
    {
        name: "Donald Duck",
        city: "Duckburg"
      },*/
      console.log ("dni " + dni + " actividad " + actividad);
      console.log (actividad);

    }

  //--------------------------------------------------------------------------------------
  function inicio () {

    // guardamos el valor vista que nos devuelve el servidor.
    var vista = "<?php echo $vista; ?>"
    console.log (vista);

    //---------------------------------------

    if ( vista ==="editar")
    {
      console.log ("dentro de :" + vista );
      document.getElementById('addact').addEventListener("click", insertaAct);
      document.getElementById('subact').addEventListener("click", quitaAct);
      document.getElementById('calcula').addEventListener("click", calcular);
      document.getElementById('bbdd_act').addEventListener("click", guarda_act);
      document.getElementById('enviar').addEventListener("click", valida);
    }
    

  }

</script>

</body>
</html>