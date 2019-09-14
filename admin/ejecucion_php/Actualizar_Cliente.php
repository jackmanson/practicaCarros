<?php
require("../../connect_db.php");

$cedula=$_POST['ced'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apell'];
$ciudad=$_POST['ciudad'];
$tel=$_POST['tel'];
$dir=$_POST['dir'];
$correo=$_POST['correo'];

$req=(strlen($cedula) *strlen($nombre) *strlen($apellido) *strlen($tel) *strlen($correo) 
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));

 $sqlw = "select * from tabla_cliente where ced='$cedula'";


$rs=mysql_query("UPDATE tabla_cliente SET ced='$cedula', nombre='$nombre', apellido='$apellido', ciudad='$ciudad', telefono='$tel',direccion='$dir', correo='$correo' WHERE ced ='$cedula'");
if(!$rs){
	$error = mysql_error();

    echo "<style type='text/css'>
	.error {
    font-family:Arial, Helvetica, sans-serif; 
    font-size:23px;
    border: 1px solid;
    margin: 10px 0px;
    padding:18px 10px 18px 90px;
    background-repeat: no-repeat;
    background-position: 20px center;
}
.error {
    color: #D8000C;
    background-color: #FFBABA;
    background-image: url('../../image/no.png');
}
  	</style>
	<div class='error'>Error al Regristar! $error</div>";

}
else
{
   echo"<script language='javascript'> alert('Actualizado exitosamente !!'); location.href='../Listar_Cliente.php';</script>";

}

?>
