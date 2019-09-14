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
      <div class="title">Modificar la Cuenta de Empleado</div>
      <form action="ejecucionPhp/Actualizar_Cuenta.php" method="post">
        
      
       <?php
            
               require('../connect_db.php');

                    $cod=$_SESSION['empleado'];

                  $sqlw = "select * from tabla_empleado where cod_empleado='$cod'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){

                      echo "<table>";
                      echo'<tr><td class="izquierd">CODIGO</td><td><input type="text" name="cod" class="form-field" value="'.$registro['cod_empleado'].'" disabled></td></tr>';
                      echo'<tr><td class="izquierd">NOMBRE</td><td><input type="text" name="nombre" class="form-field" value="'.$registro['nombre'].'"></td></tr>';
                      echo'<tr><td class="izquierd">APELLIDO</td><td><input type="text" name="apell" class="form-field" value="'.$registro['apellido'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CEDULA</td><td><input type="text" name="cedula" class="form-field" value="'.$registro['cedula'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CIUDAD</td><td><input type="text" name="ciudad" class="form-field" value="'.$registro['Ciudad'].'" ></td></tr>';
                      echo'<tr><td class="izquierd">CARGO</td><td><input type="text" name="cargo" class="form-field" value="'.$registro['cargo'].'" disabled></td></tr>';
                      echo'<tr><td class="izquierd">SEDE</td><td><input type="text" name="sede" class="form-field" value="'.$registro['sede'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CELULAR</td><td><input type="text" name="celular" class="form-field" value="'.$registro['celular'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CORREO</td><td><input type="text" name="correo" class="form-field" value="'.$registro['correo'].'"></td></tr></table>';


                    }
                  
            ?>

            
            
            <center><input  class="myButton" type="submit" value="Guardar"></center>
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