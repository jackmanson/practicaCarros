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
		height: 390px;
		background: #E8E8E8  ;
		margin: 10px auto;
		border: 6px solid #404040 ;
    padding-top: 20px;
	}
	.titulo{
	width: 100%;	
	background:#33CC00;
	color: #101010 ;
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
		height: 385px;
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
    <img src="../image/usrea.png" id="img" >
    <center>
    <p class="titulo">Registrar Usuario</p>
    <form name="f1" action="ejecucion_php/Insertar_Usuario.php" method="post"><table><tr><td>
      <tr><td><label>Cod. Empleado</label></td><td><input class="inputer"  type="text" name="cod"></td></tr>
      <tr><td><label>Usuario</label></td><td><input class="inputer"  type="text"  name="user"></td></tr>
      <tr><td><label>Contraseña</label></td><td><input class="inputer"  type="password"  name="pass"></td></tr>
      <tr><td><label>Grupo</label></td><td>

        <select name="tipo">
<option value="0">Seleccione...
</option><option selected="selected" value="admin">Administrador
</option><option value="asesor">Asesor Comercial
</option><option value="mecan">Mecanico
</option></select>

      </td></tr>

</table>
     <center> <input class="botoneo" type="submit" name="ok" value="Registrar"></center>
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
	

