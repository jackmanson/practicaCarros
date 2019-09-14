<?php
	
	
	$mysqli=new mysqli("mysql.hostinger.es","u382700695_root","jasselmago","u382700695_audi"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>