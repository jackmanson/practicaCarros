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
	height: 120%;
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
  background:rgba(248, 255, 255, 0.7);
  height: 60%;
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
  -moz-box-shadow: 0px 1px 0px 0px #1c1b18;
  -webkit-box-shadow: 0px 1px 0px 0px #1c1b18;
  box-shadow: 0px 1px 0px 0px #1c1b18;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #eae0c2), color-stop(1, #ccc2a6));
  background:-moz-linear-gradient(top, #eae0c2 5%, #ccc2a6 100%);
  background:-webkit-linear-gradient(top, #eae0c2 5%, #ccc2a6 100%);
  background:-o-linear-gradient(top, #eae0c2 5%, #ccc2a6 100%);
  background:-ms-linear-gradient(top, #eae0c2 5%, #ccc2a6 100%);
  background:linear-gradient(to bottom, #eae0c2 5%, #ccc2a6 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#eae0c2', endColorstr='#ccc2a6',GradientType=0);
  background-color:#eae0c2;
  -moz-border-radius:15px;
  -webkit-border-radius:15px;
  border-radius:15px;
  border:1px solid #333029;
  display:inline-block;
  cursor:pointer;
  color:#005e5e;
  font-family:arial;
  font-size:19px;
  font-weight:bold;
  padding:6px 31px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ccc2a6), color-stop(1, #eae0c2));
  background:-moz-linear-gradient(top, #ccc2a6 5%, #eae0c2 100%);
  background:-webkit-linear-gradient(top, #ccc2a6 5%, #eae0c2 100%);
  background:-o-linear-gradient(top, #ccc2a6 5%, #eae0c2 100%);
  background:-ms-linear-gradient(top, #ccc2a6 5%, #eae0c2 100%);
  background:linear-gradient(to bottom, #ccc2a6 5%, #eae0c2 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ccc2a6', endColorstr='#eae0c2',GradientType=0);
  background-color:#ccc2a6;
}
.myButton:active {
  position:relative;
  top:1px;
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
      <div class="title">Informacion General</div>
        <div class="piu">
          <img src="../image/AudiMemphis_cover_facility.jpg" width="534px"></div>
          <div class="piu2">
        <?php
            
               require('../connect_db.php');

                  $cod=$_SESSION['empleado'];

                  $sqlw = "select * from tabla_empleado where cod_empleado='$cod'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){

                      echo "<table>";
                      echo"<tr><td class='izquierd'>CODIGO </td><td>".$registro['cod_empleado']."</td></tr>";
                      echo"<tr><td class='izquierd'>NOMBRE </td><td>".$registro['nombre']."</td></tr>";
                      echo"<tr><td class='izquierd'>APELLIDO </td><td>".$registro['apellido']."</td></tr>";
                      echo"<tr><td class='izquierd'>CEDULA </td><td>".$registro['cedula']."</td></tr>";
                      echo"<tr><td class='izquierd'>CARGO</td><td>".$registro['cargo']."</td></tr>";
                      echo"<tr><td class='izquierd'>CIUDAD</td><td>".$registro['Ciudad']."</td></tr>";
                      echo"<tr><td class='izquierd'>SEDE</td><td>".$registro['sede']."</td></tr>";
                      echo"<tr><td class='izquierd'>CELULAR</td><td>".$registro['celular']."</td></tr>";
                      echo"<tr><td class='izquierd'>EMAIL </td><td>".$registro['correo']."</td></table>";

                    }
                  
            ?>

            
            </div>
            <center><a href="CambiarCuenta.php" class="myButton">Editar mi Cuenta</a></center>
  </div>

</header>


	<footer id="pie">
	<center>

		<p class="rojo"> AudiSportcar 2014</p></td>


		</center>
	</footer>
</body>
</html>