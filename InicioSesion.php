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
<DOCTYPE html>
<html>
<head>
	<title>AudiSportcar</title>
	<meta charset="utf-8">
	 <link type="image/x-icon" href="image/AudiTT.png" rel="shortcut icon"/>
	<style type="text/css">
	body{
		background-image: url("image/fondo.png");
		background-repeat:repeat;
	}
	#cuadro{
		background-image: url("image/login.png");
		background-repeat: no-repeat;
		background-position: center left;
		background-size: 90%;
		width: 90%;
		height: 90%;
		font-size: 32px;
		margin-top: 30px;
	}
	#login{	
		border-radius: 6px;
		float: right;
		background:#F8F8F8;
		border: 2px solid #A8A8A8 ;
	}
	.oscuro{
		opacity: 0.1;
	}

	/* Cuadro de Textos INPUT */
	.form-field {
    border: 1px solid #c9b7a2;
    background:#E0E0E0 url("image/User.png") ;
	background-repeat: no-repeat;
	background-position: left center;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
   color: #575757;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   padding:8px;
   padding-left: 32px;
   margin-bottom:20px;
   width:280px;
   height: 40px;
  font-size: 20px;
 	 margin-left: 30px;
 	 margin-right: 30px;

   }
.form-field:focus {
	background:#F8F8F8 url("image/User.png") ;
	background-repeat: no-repeat;
	background-position: left center;
   	color: #606060 ;
   }
	.form-field2 {
    border: 1px solid #c9b7a2;
    background:#E0E0E0 url("image/pass.png") ;
	background-repeat: no-repeat;
	background-position: left center;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
   color: #575757;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   padding:8px;
   padding-left: 32px;
   margin-bottom:20px;
   width:280px;
   height: 40px;
  font-size: 20px;
  margin-left: 30px;
 	 margin-right: 30px;
   }
.form-field2:focus {
	background:#F8F8F8 url("image/pass.png") ;
	background-repeat: no-repeat;
	background-position: left center;
   	color: #606060 ;
   }



.animated { 
   -webkit-animation-duration: 3s; 
   animation-duration: 3s; 
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



.fadeInRight { 
    -webkit-animation-name: fadeInRight; 
    animation-name: fadeInRight; 
}

p{
	background: #282828  ;
	color:#E0E0E0;
	font-family: verdana;
	width: 100%;
	font-size: 32px;
	border-bottom: 5px solid #3399FF;
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

/*CLASE BOTON*/
.botoneo {
	-moz-box-shadow:inset 0px 1px 0px 0px #a6827e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a6827e;
	box-shadow:inset 0px 1px 0px 0px #a6827e;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7d5d3b), color-stop(1, #634b30));
	background:-moz-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:-webkit-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:-o-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:-ms-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:linear-gradient(to bottom, #7d5d3b 5%, #634b30 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d5d3b', endColorstr='#634b30',GradientType=0);
	background-color:#7d5d3b;
	-moz-border-radius:12px;
	-webkit-border-radius:12px;
	border-radius:12px;
	border:2px solid #7a4e27;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Verdana;
	font-size:18px;
	padding:3px 68px;
	margin: 20px;
	text-decoration:none;
	text-shadow:0px 1px 0px #4d3534;
}
.botoneo:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #634b30), color-stop(1, #7d5d3b));
	background:-moz-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:-webkit-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:-o-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:-ms-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:linear-gradient(to bottom, #634b30 5%, #7d5d3b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#634b30', endColorstr='#7d5d3b',GradientType=0);
	background-color:#634b30;
}
.botoneo:active {
	position:relative;
	top:1px;
}


@-webkit-keyframes fadeInRight { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(20px); 
    } 
    100% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
} 
@keyframes fadeInRight { 
    0% { 
        opacity: 0; 
        transform: translateX(20px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
} 
.fadeInRight { 
    -webkit-animation-name: fadeInRight; 
    animation-name: fadeInRight; 
}
	</style>
</head>
<body>
	<div id="cuadro" class="animated fadeInRight">
		
	
	<div id="login" class="animated fadeInLeftBig">
		<center>
			<img src="image/loginse.jpg" width="400">
			<p>User Login</p>
			<img src="image/loginer.png"><br><br>
		<form action="entrar.php" method="post">
		<input class="form-field"  type="text"  placeholder="Usuario" name="users"><br>
		<input class="form-field2"  type="password"  placeholder="Contraseña " name="passs"><br>
		<input class="botoneo" type="submit" name="ok" value="INGRESAR">
	</form>
	</center>
		</div>
		</div>
</body>
</html>
