[Accueil](README.md) | [Installation](00-installation.md) |  [Syntaxe](01-syntaxe.md) | **Variables** | [Constantes](03-constantes.md) | [Opérateurs](04-operateurs.md) | [Conditions](05-conditions.md) | [Boucles](06-boucles.md) | [Tableaux](tableaux.md) | [Fonctions](fonctions.md) | [Super-globales](super-globales.md) | [Classes / objets](classes-objets.md) | [Espaces de noms](espaces-de-noms.md)

# Les variables

  - [Standard](#standard)
  - [Conventions de nommage](#conventions-de-nommage)
  - [Pour aller plus loin](#pour-aller-plus-loin)

## Standard
([Manuel PHP](http://php.net/manual/en/language.variables.basics.php))

  - Une variable commence obligatoirement par un `$`.
  - Elle peut contenir des nombres, mais ne peux commencer par un nombre.
  - Elle peut contenir des tirets bas (`_`), mais pas de tirets (`-`).
  - Les variables sont sensible à la casse (`$maVariable` est différente de `$mavariable`).

## Conventions de nommage
Enormément de personnes utilisent PHP. Il existe donc des _conventions_ pour à peu près tout (noms de variables, de fonctions, de classes, etc...). Concernant les variables, on utilisera de préférence la notation _lowerCamelCase_ : la variable commence par une minuscule, puis tous les mots la composant sont collés les un aux autres, la première de leur lettre en majuscule.

Exemple :

```php
<?php
// Variables suivant la recommandation:
$maVariable;
$monAutreVariable;
$_maVariable; // Les tirets bas sont autorisés en début de variables,
              // lorsqu'elles définissent une propriété privée/protégée de classe.

// Variables valides, mais ne suivant pas la recommandation:
$ma_variable;
$MaVariable;
$Ma_Supervariable;

// Variables non valides :
$1variable;
$-variable;
$une-variable;
```

## Pour aller plus loin

  - [Predefined Variables](http://php.net/manual/en/language.variables.predefined.php)
  - [Variable scope](http://php.net/manual/en/language.variables.scope.php)
  - [Variable variables](http://php.net/manual/en/language.variables.variable.php)
  - [Variables From External Sources](http://php.net/manual/en/language.variables.external.php)
