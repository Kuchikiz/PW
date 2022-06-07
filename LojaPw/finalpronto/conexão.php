<?php
	$servidor="localhost";
	$banco="bdAulaPw3";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
	
	
?>