<?php
require("../../connect_db.php");

$code=$_POST['cod'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apell'];
$cedula=$_POST['cedula'];
$ciudad=$_POST['ciudad'];
$cargo=$_POST['cargo'];
$sede=$_POST['sede'];
$tel=$_POST['celular'];
$correo=$_POST['correo'];

$req=(strlen($cedula) *strlen($nombre) *strlen($apellido) *strlen($tel) *strlen($correo) 
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));

 $sqlw = "select * from tabla_empleado where cod_empleado='$code'";


$rs=mysql_query("UPDATE tabla_empleado SET cod_empleado='$code', nombre='$nombre', apellido='$apellido', cedula='$cedula', cargo='$cargo',sede='$sede', Ciudad='$ciudad', celular='$tel', correo='$correo' WHERE cod_empleado ='$code'");
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
   echo"<script language='javascript'> alert('Actualizado exitosamente !!'); location.href='../Listar_Empleado.php';</script>";

}

?>
