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

    
    
    
    


}