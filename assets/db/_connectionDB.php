<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'ellestylecoach');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($mysqli -> connect_errno){
		echo "Fallo al conectar con MySQL: ".$mysqli -> connect_errno;
		exit();
	}