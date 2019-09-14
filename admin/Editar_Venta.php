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
  background: linear-gradient( 0deg, #C0C0C0   , #F8F8F8);}
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
  background: #FF9900;
  color:#303030;

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
		<center><img src="../image/bannerVenta.png" width="100%"><br>
		<div id="titulo">
		<center><h1>Registros de Venta</h1></center>
		</div>    
    <form action="ejecucion_php/Actualizar_Venta.php" method="post">
		<table >
			<?php
            
              require('../connect_db.php');

                  $id=$_GET['id'];

                  $sqlw = "select * from tabla_ventas where id_venta='$id'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){
             
                      echo "<table><tr class='polo' ><td colspan=2><center>DATOS DEL VENTA</center></td><tr>";
                      echo'<tr><td class="izquierd">ID-VENTA</td><td><input type="text" name="idventa" class="form-field" value="'.$registro['id_venta'].'"></td></tr>';
                      echo'<tr><td class="izquierd">MODELO AUTO</td><td><input type="text" name="modelo" class="form-field" value="'.$registro['audi'].'"></td></tr>';
                      echo'<tr><td class="izquierd">CLIENTE</td><td><input type="text" name="cliente" class="form-field" value="'.$registro['cliente'].'"></td></tr>';
                      echo'<tr><td class="izquierd">VENDEDOR</td><td><input type="text" name="vendedor" class="form-field" value="'.$registro['vendedor'].'"></td></tr>';

                      $sqlw1s = "select * from detalles_ventas where venta='$id'";
                        $result = mysql_query($sqlw1s); 
                        while ($registrol = mysql_fetch_array($result)){ 
                        echo'<tr><td class="izquierd">FECHA</td><td><input type="text" name="fecha" class="form-field" value="'.$registrol['fecha'].'"></td></tr>';
                        }

                      $sqlw1s = "select * from detalles_ventas where venta='$id'";
                        $result = mysql_query($sqlw1s); 
                        while ($registrol = mysql_fetch_array($result)){ 
                        echo'<tr><td class="izquierd">VALOR $ AUTO</td><td><input type="text" name="valor" class="form-field" value="'.$registrol['valor'].'"></td></tr>';
                        }

                      $sqlw1s = "select * from detalles_ventas where venta='$id'";
                        $result = mysql_query($sqlw1s); 
                        while ($registrol = mysql_fetch_array($result)){ 
                        echo'<tr><td class="izquierd">IMPUESTO 16%</td><td><input type="text" name="iva" class="form-field" value="'.$registrol['iva'].'"></td></tr>';
                        }

                      $sqlw1s = "select * from detalles_ventas where venta='$id'";
                        $result = mysql_query($sqlw1s); 
                        while ($registrol = mysql_fetch_array($result)){ 
                        echo'<tr><td class="izquierd">TOTAL $</td><td><input type="text" name="total" class="form-field" value="'.$registrol['total'].'"></td></tr>';
                        }

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
	
