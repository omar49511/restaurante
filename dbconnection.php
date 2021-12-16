<?php
	
	require("config.php");

	// Crea coneccion
	$sqlconnection = new mysqli($servername, $username, $password,$dbname);

	// Revisa coneccion
	if ($sqlconnection->connect_error) {
    	die("Connection failed: " . $sqlconnection->connect_error);
	}
	
?>