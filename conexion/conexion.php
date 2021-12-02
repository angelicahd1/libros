<?php
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"biblioteca_bd");
	$conexion->set_charset("UTF8");
?>