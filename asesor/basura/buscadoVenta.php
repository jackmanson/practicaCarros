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
<html>
	<head>
		<title>AudiSport</title>
<link rel='stylesheet' type= 'text/css' href= '../menu.css'/>
<style type="text/css">


/* Datagrid */
body{
  font: normal medium/1.4 sans-serif;
  background: url("../image/fondo2.png");
}
table {
  border-collapse: collapse;
  width: 50%;
}
th, td {
  padding: 0.55rem;
  border: 1px solid #ccc;
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
#cuadro{
	width: 90%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
  width: 100%;
  background: #FF9900;
  color:#303030;

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

#pie{
	width:100%;
		background: #101010  ;
}
.rojo{
	color: #E00000 ;
	font-family: Helvetica;
	font-size: 28px;
	text-align: center;

}

.botoner{

	color: #FFCC00 ;
	font-size: 20px;
	background: #383838 ;
	padding: 5px;
	padding-left: 20px;
	padding-right: 20px;
}


.form-field {
   border: 1px solid #c9b7a2;
   background: #e6e5e3;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
   color: #575757;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   padding:8px;
   margin-bottom:20px;
   width:210px;
   }
.form-field-area {
   border: 5px solid #D8D8D8 ;
   background: #e6e5e3;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
   color: #575757;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 1px 1px;
   padding:8px;
   margin-bottom:20px;
   width:610px;
   }
.form-field:focus {
   background: #fff;
   color: #725129;
   }
	</style>
	</head>
	<body>


<div class="izquierda"><img src="../image/Audi_logo.png"></div>
<div class="derecha"><center><img src="../image/admin.png"><br>Administrador</center></div>
<br>
<center>
<div id='cssmenu'>

<ul>
   <li><a href='Administrador.php'><span>INICIO</span></a></li>
   <li><a href='#'><span>MI CUENTA</span></a></li>
   <li class='active has-sub'><a href='#'><span>BASES DE DATOS</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>CLIENTE</span></a>
            <ul>
               <li><a href='#'><span>LISTAR</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
               <li class='last'><a href='#'><span>ELIMINAR</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>EMPLEADO</span></a>
            <ul>
               <li><a href='#'><span>LISTAR</span></a></li>
               <li class='last'><a href='#'><span>AGREGAR</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
               <li class='last'><a href='#'><span>ELIMINAR</span></a></li>
               <li class='last'><a href='#'><span>REGRISTAR NUEVA CUENTA</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>VEHICULOS</span></a>
            <ul>
               <li><a href='#'><span>LISTAR</span></a></li>
               <li class='last'><a href='frmVehiculo.php'><span>AGREGAR</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
               <li class='last'><a href='#'><span>ELIMINAR</span></a></li>
            </ul>
         </li>
          <li class='has-sub'><a href='#'><span>VENTAS</span></a>
            <ul>
               <li><a href='#'><span>LISTAR</span></a></li>
               <li class='last'><a href='#'><span>BUSCAR</span></a></li>
               <li class='last'><a href='#'><span>MODIFICAR</span></a></li>
               <li class='last'><a href='#'><span>ELIMINAR</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>Clientes</span></a></li>
   <li class='last'><a href='#'><span>CUENTA</span></a>
   		<ul>
               <li><a href='#'><span>Configuracion de la Cuenta</span></a></li>
               <li class='last'><a href='../CerrarSesson.php'><span>Cerrar Sesion</span></a></li>
         </ul>
   </li>
</ul>
</div>
</center>


	<div id="cuadro">
		<center><img src="../image/bannerVenta.png" width="100%"><br>
		<div id="titulo">
		<center><h1>Registro de Venta</h1></center>
		</div>
	
		<table >
			<?php
            
              require("../connect_db.php");

                  $id=$_POST['buscar'];

                      $sqlw = "select * from tabla_ventas where id_venta='$id'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){

                      echo "<table><tr class='polo' ><td colspan=2><center>DATOS DE VENTA</center></td><tr>";
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

                      echo "<tr class='polo4' ><td colspan=2><center>DETALLES VENTAS</center></td><tr>";
                      
                      

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
		</table>	
		<br>
		
			</center>
		</div>

					<footer id="pie">
	<center>
		<p class="rojo"> AudiSportcar - 2014</p></td>
		</center>
	</footer>
		</body>
	</html>	
	
