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
<?php
  require('../conexion.php');
  
  $query="SELECT *  FROM tabla_cliente";

  $resultado=$mysqli->query($query);
  
?>
<DOCTYPE html>
<html>
<head>
	<title>AudiSportcar</title>
	<link type="image/x-icon" href="image/AudiTT.png" rel="shortcut icon"/>
	<link rel='stylesheet' type= 'text/css' href= '../menu.css'/>


<script type="text/javascript">
(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>
<style type="text/css">
body{
	background-image:  url("../image/fondo.png");
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
  width: 100%;
  background: #3366FF;
  color:#202020;

}
table {
  border-collapse: collapse;
  width: 80%;
  background: #ffffff;
  margin: auto;
}
th, td {
  padding: 0.30rem;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
.centro{
  padding: 0.5rem;
  background: #484848 ;
  color: white;
  text-align: center;
  font-size: 21px;

}
#buscar{
  width: 280px;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  font-size: 22px;
  padding: 10px;
  border-radius: 7px;
   margin: 20px;
   text-align: center;
}
.cuadro{
  width: 90%;
  background: rgba(0, 0, 0, 0.7);
  padding: 20px;
  font-size: 30px;
  margin: auto;
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
               <li><a href='cuentaUsuario.php'><span>Configuracion de la Cuenta</span></a></li>
               <li class='last'><a href='../CerrarSesson.php'><span>Cerrar Sesion</span></a></li>
         </ul>
   </li>
</ul>
</div>
</center>

<div id="titulo">
    <center><h1>Regristos de Clientes</h1></center>
    </div>

<div class="cuadro">
    

     <center>
     	<img src="../image/new_user.png">
     	<div id="buscar">Buscar <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter"></div></center>
  
    <table class="order-table table" >
      <thead>
        <tr class="centro">
          <td>Cedula</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Ciudad</td>
          <td>Telefono</td>
          <td>Correo Electronico</td>
          
        </tr>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){ ?>
            <tr>
              <td><?php echo $row['ced'];?>
              </td>
              <td>
                <?php echo $row['nombre'];?>
              </td>
              <td>
                <?php echo $row['apellido'];?>
              </td>
              <td>
                <?php echo $row['ciudad'];?>
              </td>
              <td>
                <?php echo $row['telefono'];?>
              </td>
              <td>
                <?php echo $row['correo'];?>
              </td>
             
            </tr>
          <?php } ?>
        </tbody>
      </table>  
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