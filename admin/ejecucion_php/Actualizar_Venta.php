<?php
require("../../connect_db.php");

$idventa=$_POST['idventa'];
$auid=$_POST['modelo'];
$client=$_POST['cliente'];
$vend=$_POST['vendedor'];
$date=$_POST['fecha'];
$txtValor=$_POST['valor'];
$txtIva=$_POST['iva'];
$txtTotal=$_POST['total'];

$req=(strlen($idventa) *strlen($auid) *strlen($client) *strlen($vend) *strlen($date) *strlen($txtValor) *strlen($txtIva) *strlen($txtTotal)
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));


$rs1=mysql_query("UPDATE tabla_ventas SET id_venta='$idventa', audi='$auid', cliente='$client', vendedor='$vend' WHERE id_venta ='$idventa'");
$rs2=mysql_query("UPDATE detalles_ventas SET venta='$idventa', fecha='$date', valor='$txtValor', iva='$txtIva' total='$txtTotal' WHERE venta ='$idventa'");

if((!$rs1) && (!$rs2)){
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
   echo"<script language='javascript'> alert('Actualizado exitosamente !!'); location.href='../Listar_Ventas.php';</script>";

}

?>
