<?php

	$host = "localhost";
	$username = "root";
	$senha = "";
	$bd = "site_oficina";
	



	$mysqli = new mysqli($host, $username, $senha, $bd);

	if($mysqli->connect_errno)
		echo "Falha na conexão: (".$mysqli->connect_errno. ") ".$mysqli->connect_error; 

		

 
?>