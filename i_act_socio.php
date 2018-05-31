
<?php
if ($_REQUEST)
{
	if (isset($_REQUEST['id_act'])) $id=$_REQUEST['id_act']; else $id="";
	if (isset($_REQUEST['dni_socio'])) $dni=$_REQUEST['dni_socio']; else $dni="";;
	if (isset($_REQUEST['fechaI'])) $fechaI=$_REQUEST['fechaI']; else $fechaI="";
	if (isset($_REQUEST['fechaF'])) $fechaF=$_REQUEST['fechaF']; else $fechaF="";

	$sql = "INSERT INTO act_socios VALUES ($id,'$dni','$fechaI',
	'$fechaF')";
	require_once("Db.php");
	$str=Db::ejecutaSentencia($sql);
	echo $str;
}else {
	echo "no hay datos";
}
?>