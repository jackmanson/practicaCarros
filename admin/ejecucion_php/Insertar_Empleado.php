<?php
require("../../connect_db.php");

$codigo=$_POST['cod'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apell'];
$cedula=$_POST['ced'];
$cargo=$_POST['cargo'];
$ciudad=$_POST['pais'];
$sede=$_POST['provincia'];
$cel=$_POST['cel'];
$correo=$_POST['correo'];


$req=(strlen($cedula) *strlen($nombre) *strlen($apellido) *strlen($cel) *strlen($correo) *strlen($ciudad) *strlen($sede) 
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));

if($ciudad=="1"){
    $ciudad="Bogota";
}
if($ciudad=="2"){
    $ciudad="Medellin";
}
if($ciudad=="3"){
    $ciudad="Cali";
}

$rs=mysql_query("insert into tabla_empleado values ('$codigo','$nombre','$apellido','$cedula','$ciudad','$cargo','$sede','$cel','$correo')");
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
   echo"<script language='javascript'> alert('Registrado exitosamente !!'); location.href='../Listar_Empleado.php';</script>";

}

?>