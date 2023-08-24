<?php

$host = 'localhost';
$bdd = 'inventory';
$user = 'root';
$pwd = 'root';
$port = 3307;
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $nom_de_la_base);

try{ // Essayer
	$co = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
}
catch(Exception $e){ // Capter l'erreur
	die( $e->getMessage() );
}



?>