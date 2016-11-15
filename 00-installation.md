[Accueil](README.md) | **Installation** |  [Syntaxe](01-syntaxe.md) | [Variables](02-variables.md) | [Constantes](03-constantes.md) | [Opérateurs](04-operateurs.md) | [Conditions](05-conditions.md) | [Boucles](06-boucles.md) | [Tableaux](tableaux.md) | [Fonctions](fonctions.md) | [Super-globales](super-globales.md) | [Classes / objets](classes-objets.md) | [Espaces de noms](espaces-de-noms.md)

# Installation
PHP est un langage interprété. Il faudra donc installer l'interpréteur pour pouvoir commencer à travailler.

Même s'il est utilisable en ligne de commande, PHP est orienté web (serveur). Pour pouvoir l'utiliser avec un serveur web (de type Apache), il existe plusieurs moyens :

  - Packages _prêts à l'emploi_ : Wamp/Mamp,....
  - Machine virtuelle
  - Installation manuelle

## Linux

### Installation manuelle

Ce tuto s'adresse principalement aux utilisateurs d'Ubuntu, mais la démarche est similaire pour les autres plateformes:
```sh
# PHP + Apache
sudo apt install curl apache2 phpunit php php-intl php-mysql php-mcrypt php-apcu php-cli php-gd

# Optionnel mais recommandé: Mysql
sudo apt install mysql-server phpmyadmin
```

La configuration des serveurs est un autre sujet.

## Windows
ée
### Le plus simple : Wamp

  - [Télécharger Wamp](http://www.wampserver.com/en/#download-wrapper)
  - Installer Wamp...

La configuration des serveurs est un autre sujet...

## Mac

## Méthode recommandée pour développer en PHP : la machine virtuelle

Bien qu'une machine virtuelle prenne de la place en mémoire, c'est le moyen le plus efficace pour développer un projet:

  - Fonctionne sur les principaux OS (Linux/Windows/MacOS)
  - Configuration du serveur adaptée au projet, et pour le projet
  - Possibilité de partager la machine pour le travail collectif : tout le monde a la même configuration

Un dépôt a été créé pour [CakePHP](http://cakephp.org), qui est totalement adapté pour d'autres projets PHP : [Cake3 PuPHPet VM](https://github.com/mtancoigne/cake3-puphpet-vm). Cette machine a originalement été créée grâce à [PuPHPet](https://puphpet.com).

Pour l'installer, suivez le README du dépôt, vous aurez besoin de Vagrant et Virtualbox.
