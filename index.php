<?php
session_start();
// verificar si la cuenta esta activado o no para poder logearlo hasta alla
if ($_SESSION['estado']== "activo"){

   // VERIFICAR SI ES USUARIO ADMINISTRADOR
   if ($_SESSION['tipoUsuario']== "admin"){
   	header ("Location: admin/Administrador.php");
   }
   if ($_SESSION['tipoUsuario']== "asesor"){
   	header ("Location: asesor/Asesor.php");
   }
        
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
 <html>
<head>
	<title>AudiSportcar</title>
	<link type="image/x-icon" href="image/AudiTT.png" rel="shortcut icon"/>
<style type="text/css">
body{
	background-image: url("image/fondo.png");
}
#portada{
	background-image: url("image/audiwall.jpg");
	background-repeat: no-repeat;
	width: 900px;
	height: 500px;
	border: 12px solid #ffffff;
	margin: 20px auto;	
}
.ex1 img{

    margin: 15px;
    -webkit-transition: margin 0.5s ease-out;
    -moz-transition: margin 0.5s ease-out;
    -o-transition: margin 0.5s ease-out;
}
  
.ex1 img:hover {
    margin-left: 41px;
}
#pie{
	background: rgba(0, 0, 0, 0.7);
	padding:10px;

}
.blanco{
	color: #fff;
	font-family: Helvetica;
	font-size: 22px;
	text-align: center;
}
.rojo{
	color: #D80000;
	font-family: Helvetica;
	font-size: 28px;
	text-align: center;

}
</style>
</head>
<body>
<header id="portada">
<div class="ex1">
<a href="InicioSesion.php"><img src="image/ingresar.png" class="derecha"></a>
</div>
</header>
	<footer id="pie">
	<center>

		<div class="rojo">Bienvenido a AudiSportcar </div>
		<div class="blanco">Desarrollado por Jasson Polo</div>
</center>
	</footer>
</body>
</html>
