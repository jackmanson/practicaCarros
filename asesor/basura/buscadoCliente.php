<html>
	<head>
		<title>LAudiSport</title>
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
#cuadro{
	width: 90%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
	width: 100%;
  background: #3366FF;
  color:#202020;
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
	background: rgba(0, 0, 0, 0.7);
  font-size: 22px;
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
		<center><img src="../image/ejecutivos.png" width="100%"><br>
		<div id="titulo">
		<center><h1>Registro de Cliente</h1></center>
		</div>
	
		<table >
			<?php
            
              $conectar = mysql_connect("localhost","root","alc1234");
                mysql_select_db("audi",$conectar);

                  $ced=$_POST['buscar'];

                  $sqlw = "select * from tabla_cliente where ced='$ced'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){

                      echo "<table><tr class='polo' ><td colspan=2><center>DATOS DE CLIENTE</center></td><tr>";
                      echo"<tr><td class='izquierd'>CEDULA </td><td>".$registro['ced']."</td></tr>";
                      echo"<tr><td class='izquierd'>NOMBRE </td><td>".$registro['nombre']."</td></tr>";
                      echo"<tr><td class='izquierd'>APELLIDO </td><td>".$registro['apellido']."</td></tr>";
                      echo"<tr><td class='izquierd'>CIUDAD</td><td>".$registro['ciudad']."</td></tr>";
                      echo"<tr><td class='izquierd'>TELEFONO</td><td>".$registro['telefono']."</td></tr>";
                      echo"<tr><td class='izquierd'>EMAIL </td><td>".$registro['correo']."</td></table>";

                    }
                  
            ?>
		</table>	
		<br>
		
			</center>
		</div>

	 <footer id="pie">
	     <center>
		   AudiSportcar - 2014
		  </center>
	</footer>
		</body>
	</html>	
	
