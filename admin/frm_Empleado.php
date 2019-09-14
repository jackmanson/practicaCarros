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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>AudiSport</title>
<meta charset="utf-8">
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


//defino una serie de varibles Array para cada ciudad
var sede1=new Array("-","Audi Center Bogota","Audi Exclusive Bogota","Audi City Center","Audi Center 104")
var sede2=new Array("-","Audi Center Medellín")
var sede3=new Array("-","Audi Center Cali")


//función que cambia las provincias del select de provincias en función del país que se haya escogido en el select de país.
function cambia_sede(){
  //tomo el valor del select del pais elegido
  var pais
  pais = document.f1.pais[document.f1.pais.selectedIndex].value
  //miro a ver si el pais está definido
  if (pais != 0) {
    //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
    //selecciono el array de provincia adecuado
    mis_provincias=eval("sede" + pais)
    //calculo el numero de provincias
    num_provincias = mis_provincias.length
    //marco el número de provincias en el select
    document.f1.provincia.length = num_provincias
    //para cada provincia del array, la introduzco en el select
    for(i=0;i<num_provincias;i++){
       document.f1.provincia.options[i].value=mis_provincias[i]
       document.f1.provincia.options[i].text=mis_provincias[i]
    } 
  }else{
    //si no había provincia seleccionada, elimino las provincias del select
    document.f1.provincia.length = 1
    //coloco un guión en la única opción que he dejado
    document.f1.provincia.options[0].value = "-"
      document.f1.provincia.options[0].text = "-"
  }
  //marco como seleccionada la opción primera de provincia
  document.f1.provincia.options[0].selected = true
}
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
		height: 480px;
		background: #E8E8E8  ;
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
		

		<div  id="cuadro" class="animated fadeInLeftBig">
    <img src="../image/man.png" id="img" >
    <center>
    <p class="titulo">Formulario de Empleado</p>
    <form name="f1" action="ejecucion_php/Insertar_Empleado.php" method="post"><table><tr><td>
      <tr><td><label>Cod. Empleado</label></td><td><input class="inputer"  type="text" name="cod"></td></tr>
      <tr><td><label>Nombre</label></td><td><input class="inputer"  type="text"  name="nombre"></td></tr>
      <tr><td><label>Apellido</label></td><td><input class="inputer"  type="text"  name="apell"></td></tr>
      <tr><td><label>Cedula</label></td><td><input class="inputer"  type="text"  name="ced"></td></tr>
      <tr><td><label>Cargo</label></td><td>

        <select name="cargo">
<option value="" selected="selected"></option>
<option value="Jefe de Taller" >Jefe de Taller</option>
<option value="Asesor de Servicios" >Asesor de Servicios</option>
<option value="Asesor(a) de Comercial" >Asesor(a) de Comercial</option>
<option value="Jefe de Bodegas" >Jefe de Bodegas</option>
<option value="Director Comercial" >Director de Comercial</option>
<option value="Ingeniero Mecanico" >Ingeniero Mecanico</option>
<option value="Secretaria" >Ingeniero Sistema</option>
</select> 

      </td></tr>
      <tr><td><label>Ciudad</label>
</td><td>


<select name="pais" onchange="cambia_sede()">
<option value="0">
</option><option selected="selected" value="1">Bogota
</option><option value="2">Medellin
</option><option value="3">Cali
</option></select>


</td></tr>
<tr><td><label>Sede.</label></td><td>

<select name="provincia">
<option selected="selected" value="-">-</option><option value="Audi Center Bogota">Audi Center Bogota</option><option value="Audi Exclusive Bogota">Audi Exclusive Bogota</option><option value="Audi City Center">Audi City Center</option><option value="Audi Center 104">Audi Center 104</option><option value="...">...</option></select>

</td></tr>
<tr><td><label>Celular</label></td><td><input class="inputer"  type="text"  name="cel"></td></tr>
<tr><td><label>Correo Electronico</label></td><td><input class="inputer"  type="text"  name="correo"></td></tr>
</table>
     <center> <input class="botoneo" type="submit" name="ok" value="Registrar Empleado"></center>
    </form>





  </center>
  
    </div>

  </div>
<input class="botoneo" type="submit" name="ok" value="Cancelar" onClick = "cancelar();">







	
	<footer id="pie">
	<center>
		<p class="rojo"> AudiSportcar - 2014</p>
		</center>
	</footer>
		</body>
	</html>	
	

