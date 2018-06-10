<?php

$uid ="";
$pwd ="";

if (isset($_GET['uid']) && isset ($_GET['pwd']))
{
	$uid = $_GET['uid'];
	$pwd = $_GET['pwd'];
	echo "dentro";
}else
{
	echo "<h1>error- no puede acceder </h1>";
	exit();
}