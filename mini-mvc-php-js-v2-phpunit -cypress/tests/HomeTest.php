<?php
namespace App\Tests;
use App\Model\UserManager;

class HomeTest extends \PHPUnit\Framework\TestCase{

    public function testIfUserlistIsAnObject(){

        // Instance du UserManager pour gérer la création d'un utilisateur
        $list = new UserManager;

        // Je lance la méthode de recherche de la liste de user
        $result = $list->findAll();

         // Vérification que ce qui est retourné est bien un objet
        $this->assertIsNotObject($result, "Ce n'est pas un objet comme attendu");


    }

        public function testUserListIsRendered()
    {
        // Simule une requête HTTP pour récupérer le HTML de la page "home"
        $url = 'http://localhost/MyBasics-Tests/mini-mvc-php-js-v2-phpunit -cypress/home';
        $html = file_get_contents($url);

        // Vérifie que le HTML contient le pseudo d'un utilisateur spécifique
        $this->assertStringContainsString('<p class="list-pseudo">seb</p>', $html); // Exemple avec l'utilisateur "seb"
    }


    
    
    
    


}