

# Syntaxe

  - [Fichiers et tags](#fichiers-et-tags)
  - [Commentaires](#commentaires)
  - [Syntaxe générale](#syntaxe-gnrale)
  - [Quotes et double quotes](#quotes-et-double-quotes)

## Fichiers et tags
PHP étant un langage serveur destiné au web, il est possible de mélanger tout type de contenu dans un fichier PHP. Le principal étant que le fichier ait l'extension `.php`.

Le code est entouré de balises PHP: `<?php` ouvrante et `?>` fermantes. Il existe une version _short tags_ : `<?` pour la balise ouvrante, mais elle est dépréciée car directement liée au fichier de configuration `php.ini`:
>PHP also allows for short open tag <? (which is discouraged since it is only available if enabled using the `short_open_tag` php.ini configuration file directive, or if PHP was configured with the **--enable-short-tags** option).
([Source](http://php.net/manual/en/language.basic-syntax.phptags.php)).

Si un fichier contient uniquement du code PHP, il est recommandé de ne **pas** fermer le tag PHP en fin de fihcier. En effet, s'il existe des caractères (espaces, sauts de lignes,...) après la balise fermante, ils seront renvoyés au serveur tel quels, ce qui entraînera de possibles soucis dans les headers renvoyés par la page ([Manuel](http://php.net/manual/en/language.basic-syntax.phptags.php), [Explication plus complete](http://stackoverflow.com/questions/4410704/why-would-one-omit-the-close-tag#4499749));

## Commentaires
([Manuel PHP](http://php.net/manual/en/language.basic-syntax.comments.php))

Les commentaires en PHP peuvent prendre plusieur formes:

```php
<?php
// Ceci est un commentaire sur une ligne

# Ceci est un autre commentaire sur une ligne

/* Ceci est un commentaire
multiligne... */

/**
 * Ceci est un commentaire destiné à être interprété par les générateurs de documentation (DocBlock):
 * (En savoir plus : https://phpdoc.org/docs/latest/guides/docblocks.html)
 */
```

## Syntaxe générale

Une ligne d'instructions PHP doit absolument se terminer par un point-virgule (`;`). Celà n'empêche en rien de _casser_ une ligne trop longue sur plusieurs lignes:

```php
<?php
echo "Une ligne de code valide";

echo "Une autre ligne
tout aussi valide";
```

## Quotes et double quotes
Les strings _doivent_ être entourées de quotes (`'`). PHP permet d'utiliser soit des double quotes (`"`), soit des simples quotes. La principale différence entre les deux, c'est qu'entre des doubles quotes, vous pourrez ajouter directement des variables:

```php
<?php
$variable='valeur';
echo 'une $variable'; // Affichera 'une $variable'

echo "une $variable"; // Affichera 'une valeur';
```

Pour _échapper_ une quote ou double quote dans une chaîne, il faut utiliser un backslash : `\`

```php
<?php
echo 'j\'échappe ma quote, mais pas mes "double quotes" !';
echo "je n'échappe pas ma quote, mais mes \"double quotes\" !';
```
