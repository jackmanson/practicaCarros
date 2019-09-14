<?php
session_start();
// cojiendo el valor de usuario y contraseña
$_SESSION['cuenta']=$_REQUEST['users'];
$_SESSION['clave']=$_REQUEST['passs'];
// activar sesion


	require("connect_db.php");

	$sql=mysql_query("select * from tabla_usuario where usuario='".$_SESSION['cuenta']."'");
	if($f=mysql_fetch_array($sql)){
		if($_SESSION['clave']==$f['clave']){


			if ($f['tipo_usuario']== "admin") {

			//declara la sesion de activo y tipo de usaurio
				$_SESSION['tipoUsuario'] = "admin";
				$_SESSION['estado'] = "activo";
				$_SESSION['empleado']=$f['empleado'];
			echo "<script>location.href='admin/Administrador.php'</script>";
		}
		if($f['tipo_usuario']== "asesor"){

			$_SESSION['tipoUsuario'] = "asesor";
			$_SESSION['estado'] = "activo";
			$_SESSION['empleado']=$f['empleado'];
			echo "<script>location.href='asesor/Asesor.php'</script>";
		}
			if($f['tipo_usuario']== "mecan"){

			$_SESSION['tipoUsuario'] = "mecan";
			$_SESSION['estado'] = "activo";
			$_SESSION['empleado']=$f['empleado'];
			echo "<script>location.href='mantem/Mecanic.php'</script>";
		}
		
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA"); history.back(1);</script> ';	
		}
	}else{
		
		echo '<script>alert("ESTE CUENTA NO EXISTE, POR FAVOR VERIFICA LA CONTRASEÑA O USUARIO PARA PODER INGRESAR"); history.back(1); </script> ';		
	}
?>