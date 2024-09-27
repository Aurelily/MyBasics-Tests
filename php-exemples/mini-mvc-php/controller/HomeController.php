<?php 

// On passe le controller en objet classe avec une methode showHome() qui fera le render de la page home

/**
 * Classe Home
 * Sert à rendre la home page
 */
class HomeController
{
    public function showHome(){

        // Creation d'un model UserManager pour gérer le SQL et un Model User qui contient juste les setters et les getters
        $manager = new UserManager();
        $users = $manager->findAll();


        $variables = [
            'users' => $users,
        ];

        // On génère la vue de la home page via l'objet AbstractController et la methode render() créée
        $myView = new AbstractController('home');
        $myView->render($variables);


    }

}
