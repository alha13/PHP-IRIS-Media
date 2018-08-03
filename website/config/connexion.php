<?php 
	//constantes
	define("HOST","localhost");
	define("DB","actualite");
	define("USER","root");
	define("PASS","");

	try{
		$bd = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS);
		$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	} catch (PDOException $e) {
		die($e->getMessage());
	}
	
 ?>