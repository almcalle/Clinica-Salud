<?php
#$conexion = mysql_connect("localhost","root","");
$conexion = mysql_connect("localhost","root","381991");

mysql_select_db("clinica",$conexion) or die (header("Location: ../error/505.php"));
?>