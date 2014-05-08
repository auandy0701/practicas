<?php
require 'conexion.php';
$colora=$_POST["ColorA"];
$colorn=$_POST["ColorN"];

$sql="update auto set Color='$colorn' where Color='$colora'" ;
$resultado=mysql_query($sql,$con);
if($resultado){
	echo "El registro se actualizo de manera correcta";
	}else{
	die ("El registro no se actualizo".mysql_error());
		}
mysql_close($con);
?>