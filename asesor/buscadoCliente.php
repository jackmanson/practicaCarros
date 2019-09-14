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
  font: normal medium/1.4 sans-serif;
	background-image: url("../image/fondo.png");
}
#portada{
	background: #ffffff url("../image/Fondo_Asesor.jpg");
	background-repeat: no-repeat;
  background-size: 100%;
	width: 90%;
	border: 3px solid #ffffff;
	margin: 20px auto;	
}
#cuadro{
  width: 50%;
  background: rgba(0, 0, 0, 0.7);
  background-size: 100%;
  padding: 40px;
  font-size: 30px;
  border: 2px solid #ffffff;
  margin: 40px auto;
  color: white;
}
#titulo{
  width: 100%;
  background: #3366FF;
  color:#202020;
  margin: auto;
}
/* Datagrid */

table {
  border-collapse: collapse;
  width: 80%;
  background: #ffffff;
  margin: auto;
}
th, td {
  padding: 0.55rem;
  border: 1px solid #ccc;
}

.polo{
  background: #282828 ;
  color: white;
}

#pie{
  width:100%;
    background: rgba(0, 0, 0, 0.7);
    font-size: 28px;
    color: #E00000 ;
}

.derecha{
  float: right;
  font-size: 22px;
  margin: 5px;
}
.izquierda{
  float: left;
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
               <li><a href='Listar_Cliente.php'><span>LISTAR</span></a></li>
               <li class='last'><a href='frmCliente.php'><span>AGREGAR</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
               <li class='last'><a href='#'><span>ELIMINAR</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>CONSULTAR VENTAS</span></a>
            <ul>
               <li><a href='#'><span>LISTAR VENTAS</span></a></li>
               <li><a href='#'><span>CONSULTAR VENTA</span></a></li>
               <li><a href='#'><span>MODIFICAR</span></a></li>
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

    <div id="titulo">
    <center><h1>Registro de Cliente</h1></center>
    </div>


    <div id="cuadro">
  
    
    <center><img src="../image/contact.png"></center><br>
    <table >
      <?php
            
               require('../connect_db.php');

                  $ced=$_POST['buscar'];

                  $sqlw = "select * from tabla_cliente where ced='$ced'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){

                      echo "<table><tr class='polo' ><td colspan=2><center>DATOS DEL CLIENTE</center></td><tr>";
                      echo"<tr><td class='izquierd'>CEDULA </td><td>".$registro['ced']."</td></tr>";
                      echo"<tr><td class='izquierd'>NOMBRE </td><td>".$registro['nombre']."</td></tr>";
                      echo"<tr><td class='izquierd'>APELLIDO </td><td>".$registro['apellido']."</td></tr>";
                      echo"<tr><td class='izquierd'>CIUDAD</td><td>".$registro['ciudad']."</td></tr>";
                      echo"<tr><td class='izquierd'>DIRECCION</td><td>".$registro['direccion']."</td></tr>";
                      echo"<tr><td class='izquierd'>TELEFONO</td><td>".$registro['telefono']."</td></tr>";
                      echo"<tr><td class='izquierd'>EMAIL </td><td>".$registro['correo']."</td></table>";

                    }
                  
            ?>
    </table>  
    <br>
    
      </center>

    </div>


</header>


  <footer id="pie">
    <center>
    <p class="rojo"> AudiSportcar - 2014</p></td>
    </center>
  </footer>
</body>
</html>