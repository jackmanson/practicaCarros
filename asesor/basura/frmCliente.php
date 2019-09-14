<?php
session_start();
// verificar si la cuenta esta activado o no
if ($_SESSION['estado']== "activo"){

   // VERIFICAR SI ES USUARIO ASESOR
   if ($_SESSION['tipoUsuario']== "asesor"){
       
   }
   else{
      header ("Location: ../prohibido.html");
   }      
}
else{
   header ("Location: ../prohibido.html");     
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AudiSport</title>
	<meta charset="utf-8">
	 <link type="image/x-icon" href="image/AudiTT.png" rel="shortcut icon"/>
	<style type="text/css">
	body{
		background-image: url("../image/polo.png")
	}
	#cuadro{
		width: 900px;
    height: 396px;
		background: #F0F0F0 ;
		margin: 50px auto;
		border: 6px solid #404040 ;
	}
	.titulo{
	width: 100%;	
	background:#FFCC00;
	color: #202020 ;
	font-size: 38px;
	font-family: verdana;
	}
	input{
		font-size: 18px;
		padding: 2px;
	}
	label{
		font-family: verdana;
	}
	select{
		font-size: 18px;
	}
	.botoneo{
		width: 200px;
		font-size: 22px;
		margin: 10px;
		color: #660000;
	}
	#img{
		float: right;
		height: 397px;
		margin-right: 20px;
	}

	.animated { 
   -webkit-animation-duration: 4s; 
   animation-duration: 4s; 
   -webkit-animation-fill-mode: both; 
   animation-fill-mode: both; 
} 

@-webkit-keyframes fadeInLeftBig { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(-2000px); 
    } 
    100% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
} 
@keyframes fadeInLeftBig { 
    0% { 
        opacity: 0; 
        transform: translateX(-2000px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
} 
.fadeInLeftBig { 
    -webkit-animation-name: fadeInLeftBig; 
    animation-name: fadeInLeftBig; 
}

#animated-example { 
   width: 300px;
   height: 200px;
   border: solid 1px #1A7404;
   position: absolute;
   background-color: #62A80A;
} 

.animated2 { 
   -webkit-animation-duration: 1s; 
   animation-duration: 1s; 
   -webkit-animation-fill-mode: both; 
   animation-fill-mode: both; 
} 

@-webkit-keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(2000px); 
    } 
    60% { 
        opacity: 1; 
        -webkit-transform: translateX(-30px); 
    } 
    80% { 
        -webkit-transform: translateX(10px); 
    } 
    100% { 
        -webkit-transform: translateX(0); 
    } 
} 

@keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        transform: translateX(2000px); 
    } 
    60% { 
        opacity: 1; 
        transform: translateX(-30px); 
    } 
    80% { 
        transform: translateX(10px); 
    } 
    100% { 
        transform: translateX(0); 
    } 
} 

.bounceInRight { 
    -webkit-animation-name: bounceInRight; 
    animation-name: bounceInRight; 
} 
	</style>

  <script type="text/javascript">
    function cancelar()
      {
        history.back(1);
      }
  </script>
</head>
<body>
	<div id="cuadro" class="animated bounceInRight">
		<img src="../image/cliente.png" id="img" class="animated fadeInLeftBig">
		<center>
		<p class="titulo">Registrar de un Nuevo Cliente</p>
		<form action="ejecucionPhp/Insertar_Cliente.php" method="post"><table><tr><td>
			<tr><td><label>Cedula</label></td><td><input class="inputer"  type="text" name="ced" required></td></tr>
			<tr><td><label>Nombre</label></td><td><input class="inputer"  type="text"  name="nombre" required></td></tr>
			<tr><td><label>Apellido</label></td><td><input class="inputer"  type="text"  name="apell" required></td></tr>
			<tr><td><label>Ciudad</label></td><td><input class="inputer"  type="text"  name="ciudad" required></td></tr>
			<tr><td><label>Telefono</label></td><td><input class="inputer"  type="text"  name="tel" required></td></tr>
			<tr><td><label>Correo Electronico</label></td><td><input class="inputer"  type="text"  name="correo" required></td></tr>
			</table>
			<input class="botoneo" type="submit" name="ok" value="Registrar Cliente">
		</form>
	</center>
		</div>
	</div><center>
  <input class="botoneo" type="submit" name="ok" value="Cancelar" onClick = "cancelar();"></center>

</body>
</html>