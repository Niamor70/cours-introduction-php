<?php

/*
 * une fois définies, les constantes ne peuvent plus être modifiés
 * les noms de constantes doivent commencer par une lettre ou un _
 * les noms de constantes ne peuvent pas commencer par un chiffre
 * les noms de constantes ne peuvent contenir que des lettres de A à Z ou a à z des chiffres 0 à 9 et _
 *
 * pour définir une constante on utilise la fonction define
 * http://php.net/manual/fr/function.define.php
 */

define("VERSION_DU_SITE", 1.5);
echo VERSION_DU_SITE;

define("Message_d_Accueil", "Bonjour le monde.", true); // le dernier paramètre facultatif permet de rendre le nom de la constante case insensitive.
echo message_d_accueil;
echo MESSAGE_D_ACCUEIL;