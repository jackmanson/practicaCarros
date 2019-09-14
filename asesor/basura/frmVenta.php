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
<!DOCTYPE html>
<html>
<head>
	<title>AudiSport</title>
	<meta charset="utf-8">
	 <link type="image/x-icon" href="image/AudiTT.png" rel="shortcut icon"/>

	 //calcular impiesto
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
		background-image: url("../image/rir.png")
	}
	#cuadro{
		width: 900px;
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
	.botoneo{
		width: 200px;
		font-size: 20px;
		margin-left: 40px;
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
	</style>
</head>
<body>
	
	<div id="cuadro" class="animated fadeInDownBig">
		
		<p class="titulo">Registrar Venta de Auto</p>
		<form name="frmVenta" action="ejecucionPhp/Insertar_Ventas.php" method="post"><table><tr><td>
			<tr><td><label>ID-Venta</label></td><td><input class="inputer"  type="text" name="idventa" required></td></tr>
			<tr><td><label>ID-Audi</label></td><td><input class="inputer"  type="text"  name="auid" required></td></tr>
			<tr><td><label>Cliente</label></td><td><input class="inputer"  type="text"  name="client" required></td></tr>
			<tr><td><label>Asersor(a) C.</label></td><td><input class="inputer"  type="text"  name="vend" required></td></tr>
			<tr><td><label>Fecha</label></td><td><input class="inputer"  type="Date"  name="date" required></td></tr>
			<tr><td><label>Precios $</label></td><td><input class="inputer"  type="text"  name="txtValor" required></td></tr>
			<tr><td><label>IVA 16%</label></td><td><input class="inputer"  type="text"  name="txtIva" required><input type="button" value="$" onCLick ="calcularIva();"></td></tr>
			<tr><td><label>Total Valor $</label></td><td><input class="inputer"  type="text"  name="txtTotal" required><input type="button" value="$" onCLick ="calcularTotal();"></td></tr>
		</table>
			<input class="botoneo" type="submit" name="ok" value="Registrar Venta $">
		</form>
		</div>
	</div>
	<center>
  <input class="botoneo" type="submit" name="ok" value="Cancelar" onClick = "cancelar();"></center>
</body>
</html>