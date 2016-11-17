<?php

// ce fichier est requis pour que la page puisse fonctionner
require 'inc/config.php';

// connexion à la base de données en utilisant PDO
$db = new PDO('mysql:host='.configuration['mysql_host'].';port='.configuration['mysql_port'].';dbname='.configuration['mysql_db'], configuration['mysql_username'], configuration['mysql_password']);


// Methode 1

$ajouter_contact = $db->prepare("INSERT INTO `utilisateurs` (`utilisateur_nom`, `utilisateur_email`, `utilisateur_inscription`)
										VALUES (:nom, :email, :inscription)");

$ajouter_contact->execute(array(
	"nom" => "Bob",
	"email" => "bob@gmail.com",
	"inscription" => time()
));

// methode 2

$ajouter_contact = $db->prepare("INSERT INTO `utilisateurs` (`utilisateur_nom`, `utilisateur_email`, `utilisateur_inscription`)
										VALUES (:nom, :email, :inscription)");
$ajouter_contact->bindParam(':nom', $nom);
$ajouter_contact->bindParam(':email', $email);
$ajouter_contact->bindParam(':inscription', $inscription);

$nom = "Jack";
$email = "jack@hotmail.com";
$inscription = time();

$ajouter_contact->execute();


