<?php

// ce fichier est requis pour que la page puisse fonctionner
require 'inc/config.php';

// connexion à la base de données en utilisant PDO
$db = new PDO( 'mysql:host=' . configuration['mysql_host'] . ';port=' . configuration['mysql_port'] . ';dbname=' . configuration['mysql_db'], configuration['mysql_username'], configuration['mysql_password'] );

/* liste des tables :
		- utilisateurs (clé primaitre : utilisateur_id)
		- activites (champ indexé : utilisateur_id)
 */

// methode 1 (retourne uniquement les utilisateurs avec des options, 1 résultat par option)
$activites = $db->prepare( "SELECT * FROM `utilisateurs`, `activites` WHERE `utilisateurs`.`utilisateur_id` = `activites`.`utilisateur_id`" );
$activites->execute();
// ou
$activites = $db->prepare( "SELECT * FROM `utilisateurs` `u`, `activites` `a` WHERE `u`.`utilisateur_id` = `a`.`utilisateur_id`" );
$activites->execute();

// methode 2 (retourne tous les utilisateurs, même ceux sans options, si plusieurs options, retourne plusieurs fois l'utilisateur)
$activites = $db->prepare( "SELECT * FROM `utilisateurs` LEFT JOIN (`activites`) ON (`utilisateurs`.`utilisateur_id` = `activites`.`utilisateur_id`)" );
$activites->execute();