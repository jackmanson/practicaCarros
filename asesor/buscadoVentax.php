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
  font: normal medium/1.4 sans-serif;
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
#titulo{
  
  margin-top: 20px;
   width: 100%;
  background: #FF9900;
  color:#303030;
  font-family: verdana;
  font-size: 32px;
}

input{
  font-size: 22px;
}

#cuadro{
  width: 50%;
  padding: 20px;
  background: rgba(0, 0, 0, 0.7);
  background-size: 100%;
  padding: 40px;
  font-size: 30px;
  border: 2px solid #ffffff;
  margin: 40px auto;
  color: white;
}

table {
  border-collapse: collapse;
  background: #ffffff;
  width: 80%;

}
th, td {
  padding: 0.25rem;
  border: 1px solid #F0F0F0;
}
.izquierd{
  text-align: right;
}
.centro{
  padding: 0.5rem;
  background: #484848 ;
  color: white;
  text-align: center;
  font-size: 21px;

}

.polo{
  background: #282828 ;
  color: white;
}
.polo2{
  background: #0066FF;
  color: white;
}
.polo3{
  background: #686868;
  color: black;
}
.polo4{
  background: #FF9900;
  color: white;
}
table {
  border-collapse: collapse;
  width: 80%;
}
th, td {
  padding: 0.45rem;
  
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
    <center>Registro de Venta</center>
    </div> 


    <div id="cuadro">
  
        <center>
      
      <?php
            
              require("../connect_db.php");

                  $id=$_POST['buscar'];

                      $sqlw = "select * from tabla_ventas where id_venta='$id'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){

                      echo "<table><tr class='polo' ><td colspan=2><center>DATOS DEL VENTA</center></td><tr>";
                      echo"<tr><td class='izquierd'>NO. VENTA </td><td>".$registro['id_venta']."</td></tr>";

                      $sqlw1s = "select * from tabla_cliente where ced='".$registro['cliente']."'";
                      $result = mysql_query($sqlw1s); 
                      while ($registrol = mysql_fetch_array($result)){ 
                      echo "<tr class='polo2' ><td colspan=2><center>CLIENTE</center></td><tr>";
                      echo"<tr><td class='izquierd'>".$registro['cliente']."</td><td>".$registrol['nombre']." ".$registrol['apellido']."</td></tr>";}

                      $sqlwm = "select * from tabla_empleado where cod_empleado='".$registro['vendedor']."'";
                      $result = mysql_query($sqlwm); 
                      while ($registrol = mysql_fetch_array($result)){ 
                      echo "<tr class='polo3' ><td colspan=2><center>ATENDIO POR</center></td><tr>";
                      echo"<tr><td class='izquierd'>".$registrol['cod_empleado']."</td><td>".$registrol['nombre']." ".$registrol['apellido']."</td></tr>";}

                      echo "<tr class='polo4' ><td colspan=2><center>DETALLE DE VENTAS</center></td><tr>";
                      
                      

                          $sqlwms = "select * from tabla_empleado where cod_empleado='".$registro['vendedor']."'";
                          $result = mysql_query($sqlwms); 
                          while ($registrol = mysql_fetch_array($result)){ 
                          echo"<tr><td class='izquierd'>SEDE  </td><td>".$registrol['sede']."</td></tr>";}

                          $sqlw1s = "select * from detalles_ventas where venta='$id'";
                          $result = mysql_query($sqlw1s); 
                          while ($registrol = mysql_fetch_array($result)){ 
                          echo"<tr><td class='izquierd'>FECHA </td><td>".$registrol['fecha']."</td></tr>";}

                          $sqlw1s = "select * from tabla_carro where id_vehiculo='".$registro['audi']."'";
                          $result = mysql_query($sqlw1s); 
                          while ($registrol = mysql_fetch_array($result)){ 
                          echo"<tr><td class='izquierd'>VEHICULO </td><td>".$registrol['modelo']."</td></tr>";}

                      $sqlw1s = "select * from detalles_ventas where venta='$id'";
                          $result = mysql_query($sqlw1s); 
                          while ($registrol = mysql_fetch_array($result)){ 
                      echo"<tr><td class='izquierd'>VALOR</td><td> $ ".$registrol['valor']."</td></tr>";
                      echo"<tr><td class='izquierd'>IMPUESTO 16%</td><td> $ ".$registrol['iva']."</td></tr>";
                      echo"<tr><td class='izquierd'>TOTAL $ </td><td> $ ".$registrol['total']."</td></table>";
                    }

                    }
                  
            ?>
    


        </center> 
    </div>


</header>


	<footer id="pie">
	<center>

		<p><div class="rojo">Bienvenido a AudiSportcar</div></p>



		</center>
	</footer>
</body>
</html>