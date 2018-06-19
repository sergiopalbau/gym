<?php
if (isset($_POST['acceder'])) {
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$credenciales = 'local';
	if ($usuario == $credenciales && $pass == $credenciales ) {
		header('Location: ../../pages/index.html');
	}else{
		header('Location:../../../index.html');
	}
}