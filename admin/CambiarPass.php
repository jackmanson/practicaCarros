<?php
session_start();
// verificar si la cuenta esta activado o no
if ($_SESSION['estado']== "activo"){

   // VERIFICAR SI ES USUARIO ADMINISTRADOR
   if ($_SESSION['tipoUsuario']== "admin"){
       
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

a:link {
    text-decoration: none;
}

#portada{
	background: #c0c0c0 url("../image/Fondo_administrador.png");
  background-size: 100%;
	background-repeat: no-repeat;
	width: 80%;
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
  margin: 5px;
}
.titulouser{
  font-size: 18;
}


 #cuadro{ 
  background:rgba(248, 255, 255, 0.7);

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
  }
  .izquierd{
    text-align: left;
    color:#FF6600;
  }
  table{
    margin: 30px auto;
    font-size: 20px;
    background: #F0F0F0;
    padding: 20px;
  }
  .piu{
    float: right;
    margin: 30px auto;

  }
  .piu2{
    float: left;

  }

 .myButton {
  -moz-box-shadow:inset 0px 1px 3px 0px #91b8b3;
  -webkit-box-shadow:inset 0px 1px 3px 0px #91b8b3;
  box-shadow:inset 0px 1px 3px 0px #91b8b3;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
  background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
  background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
  background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
  background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
  background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
  background-color:#768d87;
  -moz-border-radius:8px;
  -webkit-border-radius:8px;
  border-radius:8px;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:arial;
  font-size:18px;
  font-weight:bold;
  padding:8px 34px;
  text-decoration:none;
  text-shadow:0px -1px 0px #2b665e;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #6c7c7c), color-stop(1, #768d87));
  background:-moz-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
  background:-webkit-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
  background:-o-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
  background:-ms-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
  background:linear-gradient(to bottom, #6c7c7c 5%, #768d87 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c7c7c', endColorstr='#768d87',GradientType=0);
  background-color:#6c7c7c;
}
.myButton:active {
  position:relative;
  top:1px;
}


 input 
 { border-color:#cccccc; border-style:solid; 
  font-size:21px; padding:4px; 
  border-width:2px; border-radius:3px; 
  text-shadow:0px 0px 0px rgba(42,42,42,.75); 
  box-shadow: 1px 0px 10px 0px rgba(42,42,42,.75);  } 
input:focus { outline:none; }

</style>
</head>
<body>


<header id="portada">
<div class="izquierda"><img src="../image/Audi_logo.png"></div>
<div class="derecha"><center><img src="../image/admin.png"><br>Administrador</center></div>
<br>
<center>
<div id='cssmenu'>

<ul>
   <li><a href='Administrador.php'><span>INICIO</span></a></li>
   <li><a href='consultar.php'><span>CONSULTAR</span></a></li>
   <li class='active has-sub'><a href='#'><span>BASES DE DATOS</span></a>
      <ul>
          <li class='has-sub'><a href='#'><span>CLIENTES</span></a>
            <ul>
               <li><a href='Listar_Cliente.php'><span>LISTAR CLIENTES</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>EMPLEADO</span></a>
            <ul>
               <li><a href='Listar_Empleado.php'><span>LISTAR</span></a></li>
               <li class='last'><a href='frm_Empleado.php'><span>AGREGAR NUEVO EMPLEADO</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>VEHICULOS</span></a>
            <ul>
               <li><a href='Listar_Auto.php'><span>LISTAR</span></a></li>
               <li class='last'><a href='frm_Auto.php'><span>REGISTRAR NUEVO VEHICULO</span></a></li>
            </ul>
         </li>
          <li class='has-sub'><a href='#'><span>VENTAS</span></a>
            <ul>
               <li><a href='Listar_Ventas.php'><span>LISTAR TODAS LAS VENTAS</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>USUARIOS</span></a>
            <ul>
               <li><a href='Lista_Usuarios.php'><span>LISTAR TODOS LOS USUARIOS</span></a></li>
               <li><a href='frm_Usuario.php'><span>REGISTRAR NUEVA CUENTA DE USUARIO</span></a></li>
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
      
        <form action="ejecucion_php/Actualizar_Contrasena.php" method="post"> 
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
		<p class="rojo">Bienvenido a AudiSportcar </p>
		</center>
	</footer>
</body>
</html>