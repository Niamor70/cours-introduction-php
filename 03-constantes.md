[Accueil](README.md) | [Installation](00-installation.md) |  [Syntaxe](01-syntaxe.md) | [Variables](02-variables.md) | **Constantes** | [Opérateurs](04-operateurs.md) | [Conditions](05-conditions.md) | [Boucles](06-boucles.md) | [Tableaux](tableaux.md) | [Fonctions](fonctions.md) | [Super-globales](super-globales.md) | [Classes / objets](classes-objets.md) | [Espaces de noms](espaces-de-noms.md)

# Constantes
Une constante est une _sorte_ de variable dont la valeur ne change pas.

  - Une fois définies, les constantes ne peuvent plus être modifiées
  - Les noms de constantes doivent commencer par une lettre ou un _
  - Les noms de constantes ne peuvent pas commencer par un chiffre
  - Les noms de constantes ne peuvent contenir que des lettres de A à Z ou a à z des chiffres 0 à 9 et _

Par convention, une constante est définie en majuscule, chaque mot étant séparé par un tiret bas (`_`).

Pour définir une constante on utilise la fonction `define('NOM', 'Valeur')` ([Manuel PHP](http://php.net/manual/fr/function.define.php)).

Exemple:
```php
<?php
// Constante valide suivant les conventions
define('VERSION_DU_SITE', 1.5);
echo VERSION_DU_SITE;

// Constante valide mais ne suivant pas les conventions:
define('versionDuSite', 1.5);
define('version_du_site', 1.5);
```

Il est aussi possible de définir une constante qui ne sera pas sensible à la casse, grâce au dernier paramètre de `define()`:

```php
<?php
// le dernier paramètre facultatif permet de rendre le nom de la constante case insensitive.
define("Message_d_Accueil", "Bonjour le monde.", true);
echo message_d_accueil;
echo MESSAGE_D_ACCUEIL;
```
