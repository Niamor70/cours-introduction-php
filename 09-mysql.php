<?php

	// ce fichier est requis pour que la page puisse fonctionner
require 'inc/config.php';

	// connexion à la base de données en utilisant PDO
$db = new PDO('mysql:host='.configuration['mysql_host'].';port='.configuration['mysql_port'].';dbname='.configuration['mysql_db'], configuration['mysql_username'], configuration['mysql_password']);

	// on prépare la requête pour récupérer la liste des utilisateurs
$utilisateurs = $db->prepare("SELECT * FROM `utilisateurs` ");
	// on execute la requête pour récupérer la liste des utilisateurs
$utilisateurs->execute();

// utile pour le débuggage :
//var_dump($utilisateurs->errorInfo());

// permet de connaître le nombre de lignes retournées par la requête
//echo $utilisateurs->rowCount();

	// boucle permettant d'executer du code pour chaque enregistrement retourné par la requête sour forme d'objet avec PDO::FETCH_OBJ
while ( $utilisateur = $utilisateurs->fetch(PDO::FETCH_OBJ) ) {
	//var_dump($utilisateur);
	echo '<b>'. $utilisateur->utilisateur_nom.'</b><br>';
	echo date("d-m-Y H:i:s", $utilisateur->utilisateur_inscription).'<br>';
	echo '<hr>';
}