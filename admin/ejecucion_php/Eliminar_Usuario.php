<?php
require("../../connect_db.php");

$eliminar=$_GET['id'];

$rs=mysql_query("DELETE FROM tabla_usuario WHERE no_usuario = '$eliminar'");
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
	<div class='error'>Error al Eliminar! $error</div>";

}
else
{
   echo"<script language='javascript'> alert('Eliminado exitosamente !!'); location.href='../Lista_Usuarios.php';</script>";

}

?>