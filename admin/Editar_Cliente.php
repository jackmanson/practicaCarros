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
<link rel='stylesheet' type= 'text/css' href= '../menu.css'/>
<style type="text/css">


/* Datagrid */
	body {
  font: normal medium/1.4 sans-serif;
  background: url("../image/fondo2.png");}
table {
  border-collapse: collapse;
  width: 50%;
}
th, td {
  padding: 0.25rem;

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
		background: #101010  ;
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
   width:610px;
   }
.form-field:focus {
   background: #fff;
   color: #725129;
   }

   .izquierd{
    text-align: right;
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
		<center><img src="../image/ejecutivos.png" width="100%"><br>
		<div id="titulo">
		<center><h1>Registros de Cliente</h1></center>
		</div>    
    <form action="ejecucion_php/Actualizar_Cliente.php" method="post">
		<table >
			<?php
            
              require('../connect_db.php');

                  $id=$_GET['id'];

                  $sqlw = "select * from tabla_cliente where ced='$id'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){
             
                      echo "<table><tr class='polo' ><td colspan=2><center>DATOS DE CLIENTE</center></td><tr>";
                      echo'<tr><td class="izquierd">CEDULA</td><td><input type="text" name="ced" class="form-field" value="'.$registro['ced'].'"></td></tr>';
                      echo'<tr><td class="izquierd">NOMBRE</td><td><input type="text" name="nombre" class="form-field" value="'.$registro['nombre'].'"></td></tr>';
                      echo'<tr><td class="izquierd">APELLIDO</td><td><input type="text" name="apell" class="form-field" value="'.$registro['apellido'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CIUDAD</td><td><input type="text" name="ciudad" class="form-field" value="'.$registro['ciudad'].'"></td></tr>';
                      echo'<tr><td class="izquierd">TELEFONO</td><td><input type="text" name="tel" class="form-field" value="'.$registro['telefono'].'"></td></tr>';
                        echo'<tr><td class="izquierd">TELEFONO</td><td><input type="text" name="dir" class="form-field" value="'.$registro['direccion'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CORREO</td><td><input type="text" name="correo" class="form-field" value="'.$registro['correo'].'"></td></tr></table>';

                    }
                  
            ?>
		</table>	
        <input  class="botoner" type="submit" value="Editar">
    </form>

			</center>
		</div>

					<footer id="pie">
	<center>
		<p class="rojo"> AudiSportcar - 2014</p></td>
		</center>
	</footer>
		</body>
	</html>	
	
