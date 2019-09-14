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
	background:  #ffffff url("../image/Fondo_Asesor.jpg");
	background-repeat: no-repeat;
  background-size: 100%;
	width: 90%;
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
.izquierda{
  float: left;
}

/* parte de formulario */
  #cuadro{
    width: 75%;
    height: 430px;
    background: #F0F0F0 ;
    margin: 50px auto;
    border: 6px solid #404040 ;
  }
  .titulo{ 
  background:#FFCC00;
  color: #202020 ;
  font-size: 38px;
  font-family: verdana;
  padding-left:10px;
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
    height: 430px;
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

.myButton {
  -moz-box-shadow: 0px 10px 14px -7px #276873;
  -webkit-box-shadow: 0px 10px 14px -7px #276873;
  box-shadow: 0px 10px 14px -7px #276873;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
  background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
  background-color:#599bb3;
  -moz-border-radius:8px;
  -webkit-border-radius:8px;
  border-radius:8px;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:arial;
  font-size:20px;
  padding:6px 32px;
  text-decoration:none;
  text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
  background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
  background-color:#408c99;
}
.myButton:active {
  position:relative;
  top:1px;
}
.icon{
  float: left;
  margin-left: 20px;
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


<section id="portada">
<div class="izquierda"><img src="../image/Audi_logo.png"></div>
<div class="derecha"><center><img src="../image/Bosss.png"><br>Asesor(a)</center></div>
<center>
  <br>
<div id='cssmenu'>

<ul>
   <li><a href='Asesor.php'><span>INICIO</span></a></li>
   <li><a href='RegristarVentas.php'><span>REGISTRO DE VENTAS</span></a></li>
   <li class='active has-sub'><a href='#'><span>BASE DE DATOS</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>CLIENTE</span></a>
            <ul>
               <li><a href='Listar_Cliente.php'><span>LISTAR TODOS LOS CLIENTES</span></a></li>
               <li class='last'><a href='frmCliente.php'><span>AGREGAR NUEVO</span></a></li>
               <li class='last'><a href='buscarCliente.php'><span>BUSCAR UN CLIENTE</span></a></li>
               <li class='last'><a href='buscarClienteM.php'><span>MODIFICAR</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>CONSULTAR VENTAS</span></a>
            <ul>
               <li><a href='ListarVenta.php'><span>LISTAR VENTAS</span></a></li>
               <li><a href='buscarVentas.php'><span>CONSULTAR VENTA</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#' class='active has-sub'><span>VEHICULOs</span></a>
     <ul>
               <li><a href='Listar_Auto.php'><span>LISTAR</span></a></li>
               <li class='last'><a href='buscarAutos.php'><span>BUSCAR UN VEHICULO</span></a></li>
            </ul>

   </li>
   <li class='last'><a href='#'><span>CUENTA</span></a>
      <ul>
               <li><a href='cuentaUsuario.php'><span>Configuracion de la Cuenta</span></a></li>
               <li class='last'><a href='../CerrarSesson.php'><span>Cerrar Sesion</span></a></li>
         </ul>
   </li>
</ul>
</div>
</center>



  <div id="cuadro" class="animated bounceInRight">
    <img src="../image/cliente.png" id="img" class="animated fadeInLeftBig">
    <center>
     <div class="titulo"><p>Registrar Cliente</p></div>  <img src="../image/contact.png" width="100px" class="icon">
    <form action="ejecucionPhp/Insertar_Cliente.php" method="post"><table><tr><td>
      <tr><td><label>Cedula</label></td><td><input class="inputer"  type="text" name="ced" required></td></tr>
      <tr><td><label>Nombre</label></td><td><input class="inputer"  type="text"  name="nombre" required></td></tr>
      <tr><td><label>Apellido</label></td><td><input class="inputer"  type="text"  name="apell" required></td></tr>
      <tr><td><label>Ciudad</label></td><td><input class="inputer"  type="text"  name="ciudad" required></td></tr>
      <tr><td><label>Telefono</label></td><td><input class="inputer"  type="text"  name="tel" required></td></tr>
      <tr><td><label>Direccion</label></td><td><input class="inputer"  type="text"  name="dir" required></td></tr>
      <tr><td><label>Correo Electronico</label></td><td><input class="inputer"  type="text"  name="correo" required></td></tr>
      </table>
      <br>
      <input class="myButton" type="submit" name="ok" value="Registrar Cliente">
    </form>
  </center>
  </div><center>
  <input class="botoneo" type="submit" name="ok" value="Cancelar" onClick = "cancelar();"></center>

</section>
	<footer id="pie">
	<center>
			<table>
		<tr><td>
		<p class="rojo">Bienvenido a AudiSportcar </p></td>
</tr>
		</table>
		</center>
	</footer>
</body>
</html>