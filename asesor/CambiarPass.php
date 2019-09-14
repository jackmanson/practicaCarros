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
	background-image:  url("../image/fondo.png");
}
a:link {
    text-decoration: none;
}
#portada{
	background: #ffffff url("../image/Fondo_Asesor.jpg");
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

#opcion1{

  width: 480px;
  background: rgba(0, 0, 0, 0.7) url("../image/folder.png");
  background-repeat: no-repeat;
  background-position: center right;
  background-size: 15%;
  margin-top: 30px;
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;

  -webkit-transition: background-color 0.5s ease-out;
  -moz-transition: background-color 0.5s ease-out;
  -o-transition: background-color 0.5s ease-out;
  transition: background-color 0.5s ease-out;


  
  padding: 30px;
  padding-left: 20px;
  font-size: 28px;
  color: white;
  font-family: verdana;
}

 #cuadro{ 
  background:rgba(248, 255, 255, 0.9);

  color: #202020 ;
  font-size: 18px;
  margin: 50px;
  text-align: center;
  font-family: verdana;
  padding:30px;
  border-top: 15px solid #303030 ;
  }
  .title{
    font-size: 38px;
    background: #282828  ;
    width: 600px;
    padding: 5px;
    color: white;
  }
  .izquierd{
    text-align: left;
    color:#FF6600;
  }
  table{
    margin: 30px auto;
    font-size: 20px;
    background: #F8F8F8 ;
    padding: 30px;
  }
  .piu{
    float: right;
    margin: 30px auto;

  }
  .piu2{
    float: left;

  }

input {
  padding: 5px;
  border: solid 1px #fff;
  box-shadow: inset 1px 1px 2px 0 #707070;
  transition: box-shadow 0.3s;
  font-size: 18px;
}
.boton{
  padding: 7px;
  background: #A00000;
  border-radius: 10px;
  color: #fff;
  margin: 10px;
  font-size: 20px;
  width: 140px;
}
.boton:hover{
  background: #B80000;
}
</style>
</head>
<body>


<header id="portada">
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
   <li><a href='#' class='active has-sub'><span>VEHICULOS</span></a>
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
  

  <div id="cuadro">
    <img src="../image/loginer.png">
      <center><div class="title">Cambiar la Contrase&ntilde;a</div></center>
      
        <form action="ejecucionPhp/Actualizar_Contrasena.php" method="post"> 
              <table>
                <tr><td><p>Contrase&ntilde;a Antiguo</td> <td><input type=password class='textbox' name="pass"></td></tr>
                <tr><td><p>Nueva Contrase&ntilde;a</td> <td><input type=password class='textbox' name="nPass"></tr>
                <tr><td><p>Repite la Contrase&ntilde;a</td> <td><input type=password class='textbox' name="rPass"></td></tr>
              </table><br>
              <input type="submit" id="submit" class="boton" name="ok" value="Cambiar">
            </div>
          </form>
  </div>

</header>


	<footer id="pie">
	<center>

		<p class="rojo"> AudiSportcar 2014</p></td>


		</center>
	</footer>
</body>
</html>