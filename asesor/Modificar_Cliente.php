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
input{
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
   width:210px;
}
table {
  border-collapse: collapse;
  width: 80%;
  background: #ffffff;
  margin: auto;

}
th, td {
  padding: 0.55rem;
}
.izquierd{
  text-align: right;
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
  border:2px solid #333029;
  display:inline-block;
  cursor:pointer;
  color:#1f1f1f;
  font-family:arial;
  font-size:18px;
  font-weight:bold;
  padding:5px 44px;
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
   <li><a href='#' class='active has-sub'><span>VEHICULOs</span></a>
     <ul>
               <li><a href='Listar_Auto.php'><span>LISTAR</span></a></li>
               <li class='last'><a href='buscarAutos.php'><span>BUSCAR UN VEHICULO</span></a></li>
            </ul>

   </li>
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
  
    
    <center>MODIFICAR CLIENTE<br><img src="../image/edit_user.png"></center>

    <form action="ejecucionPhp/Actualizar_Cliente.php" method="post">
    <table >
      <?php
            
              require('../connect_db.php');

                  $id=$_POST['buscar'];

                  $sqlw = "select * from tabla_cliente where ced='$id'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){
             
                      echo "<table><tr class='polo' ><td colspan=2><center>DATOS DEL CLIENTE</center></td><tr>";
                      echo'<tr><td class="izquierd">CEDULA</td><td><input type="text" name="ced" class="form-field" value="'.$registro['ced'].'"></td></tr>';
                      echo'<tr><td class="izquierd">NOMBRE</td><td><input type="text" name="nombre" class="form-field" value="'.$registro['nombre'].'"></td></tr>';
                      echo'<tr><td class="izquierd">APELLIDO</td><td><input type="text" name="apell" class="form-field" value="'.$registro['apellido'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CIUDAD</td><td><input type="text" name="ciudad" class="form-field" value="'.$registro['ciudad'].'"></td></tr>';
                      echo'<tr><td class="izquierd">TELEFONO</td><td><input type="text" name="tel" class="form-field" value="'.$registro['telefono'].'"></td></tr>';
                        echo'<tr><td class="izquierd">DIRECCION</td><td><input type="text" name="dir" class="form-field" value="'.$registro['direccion'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CORREO</td><td><input type="text" name="correo" class="form-field" value="'.$registro['correo'].'"></td></tr></table>';

                    }
                  
            ?>
    </table>  
    <br>
    <center> <input  class="myButton" type="submit" value="Editar"></center>

    </form>
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


