<?php

   	function conectar()
    {
    	$conexion = mysqli_connect("localhost","root","","bd_imagenes") or die ("Error al conectar a la base de datos");

    	return $conexion;
    }
?>