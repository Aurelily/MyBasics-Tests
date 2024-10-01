<?php
namespace App\Tests;
use App\Model\UserManager;

class CreateFormTest extends \PHPUnit\Framework\TestCase{


    public function testCreateUser()
    {
        // Instance du UserManager pour gérer la création d'un utilisateur
        $userManager = new UserManager();
    
        // Création de l'utilisateur via la méthode createUser, en vérifiant qu'il n'y a pas d'exception
        $result = $userManager->createUser("Bibi", "bibi@gmail.com", "Azerty1!", "Azerty1!");
    
        // Vérification que la méthode createUser retourne un résultat attendu (par exemple, l'ID de l'utilisateur créé ou un message de succès)
        $this->assertIsNumeric($result, "La création d'un utilisateur devrait retourner un ID.");
    }
    
    
    
    


}