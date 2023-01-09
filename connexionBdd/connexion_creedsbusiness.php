<?php
try{
	// On se connecte à MySQL
	$pdo_options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
	$bdd = new PDO('mysql:host=localhost;dbname=creeds;charset=utf8', 'root', '',$pdo_options);
	$bdd->exec('set names utf8');
	}
	
catch(PDOException $e){
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur de connexion a la bd: '.$e->getMessage());
	}
?>