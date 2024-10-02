Ce mini projet sert à tester les tests unitaires avec PHP Unit et Cypress pour le JS.
Par rapport à la version précédente, j'ai ajouté des tests sur mon javascript avec Cypress.

ATTENTION : Sur ce projet vous devez recréer le dossier node modules avant de tester : npm install
A la racine un fichier calanques.sql vous permettra d'importer la base de donnée utilisée dans cet exemple.

Cypress :
- Avoir NodeJS d'installé.
- Installer Cypress dans le dossier du projet : npm install cypress --save-dev
- Lancer l'application depuis le terminal dans le projet : npx cypress open
- Choisir son type de test (E2E si on est pas sure, on peut le changer après)
- Modifier son code et crée des fichiers de test dans VSCode (dossier cypress->e2e par exemple)



PHP Unit : 
- Recommandé : dernière version de PHP
- Installez Composer : https://getcomposer.org/
- Installez PHPUnit avec Composer via le terminal : composer require --dev phpunit/phpunit

- On teste sa version : ./vendor/bin/phpunit --version
- On crée un fichier de config phpunit.xml
- Créez un dossier "tests" indiqué dans votre fichier de config
- On crée ces classes de test et on les lance dans le terminal comme ça : ./vendor/bin/phpunit
- Ou comme ça si on ne veut tester qu'un seul fichier : ./vendor/bin/phpunit tests/HomeTest.php