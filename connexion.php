<?php
	try{
		$serveur = "localhost";
        $dbname = "limited";
        $user = "root";
        $pass = "root";
		$connexion = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
	}
	catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'Numéro : '.$e->getCode();
	}
?>