<?php
	
	
	$mysqli=new mysqli("127.12.183.2","adminrlk2zrI","fmLZaNKWzFpf","audi"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>