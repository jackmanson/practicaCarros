<?php
session_start();
// verificar si la cuenta esta activado o no
if ($_SESSION['estado']== "activo"){
     
}
else{
   header ("Location: ../prohibido.html");     
}
?>
<DOCTYPE html>
<html>
<head>
	<title>AudiSportcar</title>
	<link type="image/x-icon" href="image/AudiTT.png" rel="shortcut icon"/>
<style type="text/css">
body{
	background-image: url("../image/dark.png");
}
#cuerpo
{
	width: 700px;

	margin: 30px auto;
	background: white;
	padding: 10px;
}
#titulo{
	width: 94%;

	 background:#383838  url("../image/dialgowaring.png") ;
	background-repeat: no-repeat;
	background-position: left center;
	padding: 20px;
	padding-top: 30px;
	font-size: 38px;
	font-family: verdana;
	color:white;
	border-top: 10px solid #FFCC00;
	text-align: center;
	margin: auto;
}
#parrafo{
	height: 300px;
	font-size: 28px;
	margin-top: 20px;
	padding: 20px;
	text-align: center;
}
</style>
</head>
<section id="cuerpo">
<div id="titulo">Acesso Denegado !</div>
<div id="parrafo">Usted esta viendo este mensaje de error porque la pagina a la que intenta acceder contiene, o esta clasifica como conteniendo que se considera inapropiado.<br><br>
<img src="../image/ladron.jpg">

</div>
</section>
</body>
</html>