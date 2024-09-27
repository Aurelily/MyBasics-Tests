<?php 

/**
 * Classe Profile
 * Sert à rendre la page profile
 */
class ProfileController
{
    public function showProfile(){

        $manager = new UserManager();
        $user = $manager->findById(2); // Je choisi en dur d'afficher le user id=2 de ma bdd pour l'exemple

        $variables = [
            'user' => $user,
        ];
        
        
         // On génère la vue de la page profile via l'objet AbstractController et la methode render()
         $myView = new AbstractController('profile');
         $myView->render( $variables);

    }
}