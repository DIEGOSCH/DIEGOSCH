<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost:3306";    // sera el valor de nuestra BD 
	$basededatos = "encuestas";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "chavez-98";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "encuesta1"; 	   // tabla de usuarios
	$tabla_db2 = "encuesta2";

	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>