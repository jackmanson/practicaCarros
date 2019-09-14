<?php
require("../../connect_db.php");

$codigo=$_POST['cod'];
$empleado=$_POST['empleado'];
$usuario=$_POST['user'];
$clave=$_POST['pass'];
$tipo=$_POST['grupo'];

$req=(strlen($codigo) *strlen($empleado) *strlen($usuario) *strlen($clave) *strlen($tipo) 
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));

$rs=mysql_query("UPDATE tabla_usuario SET no_usuario='$codigo', usuario='$usuario', clave='$clave', tipo_usuario='$tipo', empleado='$empleado' WHERE no_usuario ='$codigo'");
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
   echo"<script language='javascript'> alert('Actualizado exitosamente !!'); location.href='../Lista_Usuarios.php';</script>";

}

?>
