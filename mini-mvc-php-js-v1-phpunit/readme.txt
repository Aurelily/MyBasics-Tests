Ce mini projet sert à tester les tests unitaires avec PHP Unit et Cypress pour le JS.


PHP Unit : 
- Recommandé : dernière version de PHP
- Installez Composer : https://getcomposer.org/
- Installez PHPUnit avec Composer via le terminal : composer require --dev phpunit/phpunit

- On teste sa version : ./vendor/bin/phpunit --version
- On crée un fichier de config phpunit.xml
- Créez un dossier "tests" indiqué dans votre fichier de config
- On crée ces classes de test et on les lance dans le terminal comme ça : ./vendor/bin/phpunit