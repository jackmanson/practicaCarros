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
      <div class="title">Informacion General</div>
        <div class="piu">
          <img src="../image/AudiMemphis_cover_facility.jpg" width="434px"></div>
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

		<p class="rojo">Bienvenido a AudiSportcar </p>

		</center>
	</footer>
</body>
</html>