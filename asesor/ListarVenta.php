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
  
  $query="SELECT *  FROM tabla_ventas";

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

#buscar{
  width: 350px;
  background:rgba(0, 0, 0, 0.5) ;
  background-repeat: no-repeat;
  background-position: right center;
  padding-left: 10px ;
  border-radius: 5px;
  margin:auto;
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: left;
  font-size: 22px;
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
  background: #FF9900;
  color:#303030;
  font-size: 32px;
  margin-top: 20px;
}

#cuadro{
  width: 90%;
  height: 400px;
  background: rgba(0, 0, 0, 0.7);
  background-size: 100%;
  padding: 40px;
  border: 2px solid #ffffff;
  margin: 40px auto;
  color: white;
}

table {
  border-collapse: collapse;
  background: #ffffff;
  width: 80%;
  margin:auto;

}
th, td {
  padding: 0.25rem;
  border: 1px solid #F0F0F0;
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
    <center>Registros de Ventas</center>
    </div>


    <div id="cuadro">
  
        
     
  <div id="buscar"> <center>Buscar <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter"></center></div>
  <br><br>
    <table class="order-table table" >
      <thead>
        <tr class="centro">
          <td>ID-Ventas.</td>
          <td>Cliente</td>
          <td>Vehiculo</td>
          <td> Fecha </td>
          <td>Totals $</td>
          
        </tr>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){ ?>


            
            <tr>
              <td><?php echo $row['id_venta'];?>
              </td>
              <td>
                <?php 
                require('../connect_db.php');
                $cliente =$row['cliente'];
                $sqlw1s = "select * from tabla_cliente where ced='$cliente'";
                          $result = mysql_query($sqlw1s); 
                           while ($registro = mysql_fetch_array($result)){ echo $registro['nombre']." ".$registro['apellido'];}?>
              </td> 
               <td>
                <?php 
                require('../connect_db.php');
                $carro =$row['audi'];
                $sqlw1s = "select * from tabla_carro where id_vehiculo='$carro'";
                          $result = mysql_query($sqlw1s); 
                           while ($registro = mysql_fetch_array($result)){ echo $registro['modelo'];}?>
              </td>           
              <td>
                <?php 
                require('../connect_db.php');
                $fecha =$row['id_venta'];
                $sqlw = "select * from detalles_ventas where venta='$fecha'";
                          $result = mysql_query($sqlw); 
                           while ($registro = mysql_fetch_array($result)){ echo $registro['fecha'];}?>
              </td>
              <td>
                <?php 
                require('../connect_db.php');
                $valor =$row['id_venta'];
                $sqlw1s = "select * from detalles_ventas where venta='$valor'";
                          $result = mysql_query($sqlw1s); 
                           while ($registro = mysql_fetch_array($result)){ echo "$ ".$registro['total'];}?>
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

		<p><div class="rojo">Bienvenido a AudiSportcar</div></p>



		</center>
	</footer>
</body>
</html>