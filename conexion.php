<?php
$servidor="sql308.260mb.net";
$usuario="n260m_14425832";
$contrasena="070791";
$baseDatos="n260m_14425832_transporte";
$con=mysql_connect($servidor,$usuario,$contrasena)or die("Error de conexión".mysql_error());
mysql_select_db($baseDatos,$con);
?>