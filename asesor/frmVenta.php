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
   <script type= "text/JavaScript">
  function calcularIva()
    {
    var valor = parseFloat(document.frmVenta.txtValor.value);
    var iva = valor * 0.16 ;
    document.frmVenta.txtIva.value = iva;
    }
    function calcularTotal()
    {
    var valor = parseFloat(document.frmVenta.txtValor.value);
    var iva = parseFloat(document.frmVenta.txtIva.value);
    var total = iva+valor;
    document.frmVenta.txtTotal.value = total;
    }
  function cancelar()
      {
        history.back(1);
      }
  </script>
<style type="text/css">
body{
	background-image: url("../image/fondo.png");
}
#portada{
	background:#ffffff url("../image/Fondo_Asesor.jpg");
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
    width: 80%;
    height: 500px;
    background: #ffffff url("../image/ventas.png");
    background-repeat: no-repeat;
    background-position:right bottom;
    margin: 20px auto;
    border: 6px solid #404040 ;
  }
  .titulo{
  width: 100%;  
  background:#3366FF;
  color: black ;
  font-size: 38px;
  font-family: verdana;
  text-align: center;
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
  #img{
    float: left;
    height: 485px;
  }

#animated-example { 
   width: 300px;
   height: 200px;
   border: solid 1px #1A7404;
   position: absolute;
   background-color: #62A80A;
} 

.animated { 
   -webkit-animation-duration: 3s; 
   animation-duration: 3s; 
   -webkit-animation-fill-mode: both; 
   animation-fill-mode: both; 
} 

@-webkit-keyframes fadeInDownBig { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateY(-2000px); 
    } 
    100% { 
        opacity: 1; 
        -webkit-transform: translateY(0); 
    } 
} 
@keyframes fadeInDownBig { 
    0% { 
        opacity: 0; 
        transform: translateY(-2000px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateY(0); 
    } 
} 
.fadeInDownBig { 
    -webkit-animation-name: fadeInDownBig; 
    animation-name: fadeInDownBig; 
}
table{
  margin: 40px;
}

.myButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
  background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
  background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
  background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
  background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
  background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
  background-color:#f9f9f9;
  -moz-border-radius:6px;
  -webkit-border-radius:6px;
  border-radius:6px;
  border:1px solid #dcdcdc;
  display:inline-block;
  cursor:pointer;
  color:#666666;
  font-family:arial;
  font-size:18px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
  background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
  background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
  background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
  background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
  background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
  background-color:#e9e9e9;
}
.myButton:active {
  position:relative;
  top:1px;
}
.botoneo{
    width: 200px;
    font-size: 22px;
    margin: 10px;
    color: #660000;
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


  <div id="cuadro" class="animated fadeInDownBig">
    
    <p class="titulo">Registrar Venta</p>
    <form name="frmVenta" action="ejecucionPhp/Insertar_Ventas.php" method="post"><table><tr><td>
      <tr><td><label>ID-Venta</label></td><td><input class="inputer"  type="text" name="idventa" required></td></tr>
      <tr><td><label>CODE Audi</label></td><td><input class="inputer"  placeholder="Intoduce el CODIGO de audi" type="text"  name="auid" required></td></tr>
      <tr><td><label>Cliente</label></td><td><input class="inputer" placeholder="Intoduce el cedula de cliente" type="text"  name="client" required></td></tr>
      <tr><td><label>Asesor(a) C.</label></td><td><input class="inputer"  type="text" value="<?php echo $_SESSION['empleado'];?>" name="vend" required></td></tr>
      <tr><td><label>Fecha</label></td><td><input class="inputer"  type="Date"  name="date" required></td></tr>
      <tr><td><label>Precios $</label></td><td><input class="inputer"  type="text"  name="txtValor" required></td></tr>
      <tr><td><label>IVA 16%</label></td><td><input class="inputer"  type="text"  name="txtIva" required><input type="button" value="$" onCLick ="calcularIva();"></td></tr>
      <tr><td><label>Total Valor $</label></td><td><input class="inputer"  type="text"  name="txtTotal" required><input type="button" value="$" onCLick ="calcularTotal();"></td></tr>
    </table>
      <center><input class="myButton" type="submit" name="ok" value="Registrar Venta $"></center>
    </form>
    </div>
  </div>
  <center>
  <input class="botoneo" type="submit" name="ok" value="Cancelar" onClick = "cancelar();"></center>

</section>
	<footer id="pie">
	<center>
			<table>
		<tr><td>
		<p class="rojo">Bienvenido a AudiSportcar </p></td>
		</table>
		</center>
	</footer>
</body>
</html>