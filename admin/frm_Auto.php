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
<html>
<head>
<title>AudiSport</title>
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

body{
	background-image: url("../image/fondo2.png");
}

#cuadro2{
	width: 90%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}


/* parte de los botones */
a:link   
{   
 text-decoration:none;   
 text-align: center;
}

.centar
{
	text-align: center;
}

#pie{
	width:100%;
		background: #101010  ;
}
.blanco{
	color: #fff;
	font-family: Helvetica;
	font-size: 22px;
	text-align: center;
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
	#cuadro{
		width: 80%;
		height: 100%;
		background: #ffffff url("../image/audi.png");
		background-size: 100%;
		background-repeat: no-repeat;
		margin: 10px auto;
		border: 6px solid #404040 ;
	}
	.titulo{
	width: 100%;	
	background:#202020;
	color: #F8F8F8 ;
	font-size: 38px;
	font-family: verdana;
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
	.botoneo{
		width: 200px;
		font-size: 20px;
		margin: 10px;
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
	</style>
		<script type="text/javascript">
		function cancelar()
      {
        history.back(1);
      }
	</script>
	</head>
	<body>


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



	<div id="cuadro2">
		

		<div id="cuadro" class="animated fadeInDownBig">
		<center>
		<p class="titulo">Formulario de Nuevo Vehiculo</p>
		<form action="ejecucion_php/Insertar_Auto.php" method="post">
			<table><tr><td>
			<tr><td><label>COD Audi</label></td><td><input class="inputer"  type="text" name="cod"></td></tr>
			<tr><td><label>Modelo</label></td><td><input class="inputer"  type="text"  name="mod"></td></tr>
			<tr><td><label>Motor</label></td><td><input class="inputer"  type="text"  name="motor"></td></tr>
			<tr><td><label>Tipo de Carro</label></td><td>
				<select name="tipo">
			<option selected="selected" value="-"></option>
			<option value="Automovil">Automovil</option>
			<option value="Camioneta">Camioneta</option>
			<option value="Coupe">Coupe</option>
			<option value="Deportivo">Deportivo</option>
		</select>

			</td></tr>
			<tr><td><label>Valor $</label></td><td><input class="inputer"  type="text"  name="precio"></td></tr>
		</table>
			<input class="botoneo" type="submit" name="ok" value="Registrar Modelo">
		</form>
	</center>
		</div>
		<input class="botoneo" type="submit" name="ok" value="Cancelar" onClick = "cancelar();">
	</div>



	
	<footer id="pie">
	<center>
		<p class="rojo"> AudiSportcar - 2014</p></td>
		</center>
	</footer>
		</body>
	</html>	
	
