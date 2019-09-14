<?php
require("../../connect_db.php");

$idventa=$_POST['idventa'];
$auid=$_POST['auid'];
$client=$_POST['client'];
$vend=$_POST['vend'];
$date=$_POST['date'];
$txtValor=$_POST['txtValor'];
$txtIva=$_POST['txtIva'];
$txtTotal=$_POST['txtTotal'];

$req=(strlen($idventa) *strlen($auid) *strlen($client) *strlen($vend) 
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));


$rs=mysql_query("insert into tabla_ventas values ('$idventa','$auid','$client','$vend')",$link);
if(!$rs){
    echo mysql_error();
}
else
{
   
   $rs2=mysql_query("insert into detalles_ventas values ('','$idventa','$date','$txtValor', '$txtIva','$txtTotal')",$link);
	if(!$rs2){
    echo mysql_error();}
    else{
    	echo"<script language='javascript'> alert('Registrado exitosamente !!'); location.href='../RegristarVentas.php';</script>";
    }
}

?>