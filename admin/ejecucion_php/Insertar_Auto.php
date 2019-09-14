<?php
require("../../connect_db.php");

$codigo=$_POST['cod'];
$modelo=$_POST['mod'];
$motor=$_POST['motor'];
$tipo=$_POST['tipo'];
$precio=$_POST['precio'];


$req=(strlen($codigo) *strlen($modelo) *strlen($motor) *strlen($tipo) *strlen($precio) 
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));


$rs=mysql_query("insert into tabla_carro values ('$codigo','$modelo','$motor','$tipo','$precio')");
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
   echo"<script language='javascript'> alert('Registrado exitosamente !!'); location.href='../Listar_Auto.php';</script>";

}

?>