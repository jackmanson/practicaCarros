<?php
	require('conexion.php');
	
	$query="SELECT *  FROM tabla_carro";

	$resultado=$mysqli->query($query);
	
?>
<html>
	<head>
		<title>Listar Empleado</title>
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
<link rel='stylesheet' type= 'text/css' href= '../menu.css'/>
<style type="text/css">


/* Datagrid */
	body {
  font: normal medium/1.4 sans-serif;
  background: linear-gradient( 0deg, #C0C0C0   , #F8F8F8);}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.55rem;
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

#cuadro{
	width: 90%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
	width: 100%;
	background: #A00000 ;
	color:white;

}
a:link   
{   
 text-decoration:none;   
 text-align: center;
}
.eliminar{
	color:#FFFFFF;
	background: #C00000;
	padding: 5px;
	border-radius: 5px;
	padding-left: 20px;
	padding-right: 20px;


}
.editar{
	color:#FFFFFF;
	background: #3366FF;
	padding: 5px;
	border-radius: 5px;
	padding-left: 20px;
	padding-right: 20px;

}
.add{
	color:#FFFFFF;
	background: #33CC00;
	padding: 5px;
	border-radius: 5px;
	padding-left: 20px;
	padding-right: 20px;
	float: left;
}
.add:hover{
 background: #009900;
}
.centar
{
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

.derecha{
	float: right;
	font-size: 22px;
	margin: 5px;
}
.izquierda{
  float: left;
  margin: 5px;
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
		<center><img src="../image/bannerAuto.png" width="100%"><br>
		<div id="titulo">
		<center><h1>Registros de Vehiculos</h1></center>
		</div>
		 <a href="frmVehiculo.php" class="add">Agregar Nuevo</a> <div class="derecha">Buscar <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter"></div>
  <br><br>
		<table class="order-table table" >
			<thead>
				<tr class="centro">
					<td>ID_Vehiculo</td>
					<td>Modelo Auto</td>
					<td>Motor</td>
					<td>tipo</td>
					<td>Valors $</td>
					<td colspan="2">Actions</td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['id_vehiculo'];?>
							</td>
							<td>
								<?php echo $row['modelo'];?>
							</td>
							<td>
								<?php echo $row['motor'];?>
							</td>
							<td>
								<?php echo $row['tipo'];?>
							</td>
							<td>
								$ <?php echo $row['precios'];?>
							</td>
							<td class="centar">
								<a href="modificar.php?id=<?php echo $row['cod_empleado'];?>" class="editar">Editar</a>
							</td>
							<td class="centar">
								<a href="ejecucion_php/Eliminar_Auto.php?id=<?php echo $row['id_vehiculo'];?>" class="eliminar">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
			</center>
		</div>

					<footer id="pie">
	<center>
		<p class="rojo"> AudiSportcar - 2014</p></td>
		</center>
	</footer>
		</body>
	</html>	
	
