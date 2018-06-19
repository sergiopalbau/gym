<?php
$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$dsn = "mysql:host=localhost;dbname=saya";
$usuario = 'dwes';
$contrasena = 'abc123.';
$bd = new PDO($dsn, $usuario, $contrasena, $opc);
?>