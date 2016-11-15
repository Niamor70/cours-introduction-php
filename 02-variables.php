<?php

/*
 * les variables permettent de stocker des données qui peuvent provenir d'une base de données, d'un formulaire, etc ...
 * les noms de variables sont précédés du signe $
 * les noms de variables sont case-sensitive
 * les noms de variables doivent commencer par une lettre ou un _
 * les noms de variables ne peuvent pas commencer par un chiffre
 * les noms de variables ne peuvent contenir que des lettres de A à Z ou a à z des chiffres 0 à 9 et _
 */

$x = 1;
$nom = 'Romain';
$message_accueil = "Bonjour";
$largeur = 3;
$longueur = 5;

/*
 * pour afficher les variables on peut utiliser echo
 */

echo 'Surface: ' . $largeur * $longueur . '<br>';

echo "$message_accueil $nom <br>"; // variables interprétées directement dans une chaine de caractère avec les guillemets
echo $message_accueil . " - \" " . $nom . "<br>";