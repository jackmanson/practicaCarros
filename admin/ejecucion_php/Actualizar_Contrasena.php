<?php
session_start();
require("../../connect_db.php");

$code=$_SESSION['empleado'];
$pass=$_POST['pass'];
$nPass=$_POST['nPass'];
$rPass=$_POST['rPass'];

$req=(strlen($code) *strlen($pass) *strlen($nPass) *strlen($rPass)
or die("<script language='javascript'> alert('Debe diligenciar todos los campos'); history.back(1);</script>"));

$sqlwms = "select * from tabla_usuario where empleado='$code'";
$result = mysql_query($sqlwms); 
while ($registrol = mysql_fetch_array($result)){ $clave = $registrol['clave'];}

if($pass == $clave){
    
    if($nPass == $rPass){
        $actualizarClave=mysql_query("UPDATE tabla_usuario SET clave='$nPass' WHERE empleado ='$code'");  
        echo"<script language='javascript'> alert('Actualizado contraseñas !!'); location.href='../cuentaUsuario.php';</script>";
    }
    else{
         echo "<script language='javascript'> alert('Error! Debe Ingresar Contraseña igual!!'); history.back(1);</script>";
    }
}
else{
    echo "<script language='javascript'> alert('Error! Debe Ingresar Contraseña correcta'); history.back(1);</script>";
}
?> 