Ce mini projet sert à tester les tests unitaires avec PHP Unit et Cypress pour le JS.
Ceci est la version 0 :  sans aucun framework de test installé.
Dans cette version, j'ai utilisé les namespace et l'autoload de Composer de façon classique afin de pouvoir installer phpUnit ensuite avec composer sans conflit d'autoloader.
On peut partir de cette version pour démarrer une installation de zéro :

- Recommandé : dernière version de PHP
- Installez Composer : https://getcomposer.org/
- Ensuite dans le dossier : composer init 
- Modifiez le composer.json pour que le namespace App corresponde bien à la racine du projet et pour définir tous les endroits où il y a des classes à charger