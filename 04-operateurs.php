<?php

$x = 7;
$y = 30;

// addition

$somme = $x + $y; // on définit une nouvelle variable et on lui attribue la somme de $x + $y
$somme += 4; // on ajoute 4 à la somme
$x += 1;
echo $somme;

// soustraction

$soustraction = $x - $y;
echo $soustraction;

$x -= 1; // exemple avec l'oprateur -=

// multiplication
$multiplication = $x * $y;
// on peut aussi utiliser cette forme : $x *= $y;

// division
$division = $x / $y;

// modulo

$modulo = $x % $y;
echo $modulo;

// incrémentation
$x = $x + 1;
$x++;

$x = $x--;
