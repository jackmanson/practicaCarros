<?php
session_start();
// verificar si la cuenta esta activado o no
if ($_SESSION['estado']== "activo"){

   // VERIFICAR SI ES USUARIO ASESOR
   if ($_SESSION['tipoUsuario']== "mecan"){
       
   }
   else{
      header ("Location: ../prohibido.html");
   }      
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
	<link rel='stylesheet' type= 'text/css' href= '../menu.css'/>
<style type="text/css">
body{
	background-image: url("../image/fondo.png");
}
#portada{
	background-image: url("../image/Fondo_Mecanico.jpg");
	background-repeat: no-repeat;
	width: 1024px;
	height: 640;
	border: 3px solid #ffffff;
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
	width:100%;
	background: rgba(0, 0, 0, 0.7);
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
.derecha{
	float: right;
	font-size: 22px;
	margin: 5px;
}
</style>
</head>
<body>


<header id="portada">

<div class="derecha"><center><img src="../image/mecanico.png"><br>Mecanico</center></div>
<center>
<div id='cssmenu'>

<ul>
   <li><a href='#'><span>INICIO</span></a></li>
   <li><a href='#'><span>REGRISTO DE MANTENIMIENTO</span></a></li>
   <li class='active has-sub'><a href='#'><span>BASE DE DATOS TALLER</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>CLIENTE</span></a>
            <ul>
               <li><a href='#'><span>LISTAR</span></a></li>
               <li class='last'><a href='#'><span>AGREGAR</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>CONSULTAR MANTENIMIENTO</span></a>
            <ul>
               <li><a href='#'><span>LISTAR MANTENIMIENTO</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>VEHICULOS DE TALLER</span></a>
            <ul>
               <li><a href='#'><span>LISTAR</span></a></li>
               <li class='last'><a href='#'><span>AGREGAR</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
               <li class='last'><a href='#'><span>ELIMINAR</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#' class='active has-sub'><span>VEHICULOS</span></a>
     <ul>
               <li><a href='#'><span>LISTAR VEHICULOS</span></a></li>
               <li class='last'><a href='#'><span>BUSCAR MODELO</span></a></li>
            </ul>

   </li>
   <li class='last'><a href='#'><span>CUENTA</span></a>
   		<ul>
               <li><a href='#'><span>Configuracion de la Cuenta</span></a></li>
               <li class='last'><a href='../CerrarSesson.php'><span>Cerrar Sesion</span></a></li>
         </ul>
   </li>
</ul>
</div>
</center>

</header>


	<footer id="pie">
	<center>
			<table>
		<tr><td>
		<p class="rojo">Bienvenido a AudiSportcar </p></td>
</tr><tr><td>
		<p class="blanco">Desarrollado por Felipe Perdomo - UscoSoft</p></td>
</tr>
		</table>
		</center>
	</footer>
</body>
</html>