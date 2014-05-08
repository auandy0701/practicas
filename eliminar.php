<?php
require 'conexion.php';

$idautomovil=$_POST["IdAutomovil"];


$sql="delete from auto where id_auto='$idautomovil';";
$resultado=mysql_query($sql,$con);

if($resultado){
 echo "El registro se elimino de manera correcta ";       
}else{
 die("Error de conexión".mysql_error());   
}

mysql_close($con);
?>