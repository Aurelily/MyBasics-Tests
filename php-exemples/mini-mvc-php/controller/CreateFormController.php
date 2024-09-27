<?php 


/**
 * Classe CreateUserController
 * Sert à rendre la page de creation d'un user
 */
class CreateFormController
{
    public function showCreateForm(){



        $variables = [];

        // On génère la vue de la home page via l'objet AbstractController et la methode render() créée
        $myView = new AbstractController('createForm');
        $myView->render($variables);


    }

    public function addUser(){

        $values = [
            'pseudo' => $_POST['pseudo'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'confirm_password' => $_POST['confirm_password']
        ];

        $manager = new UserManager();
        $form = $manager->createUser($values['pseudo'], $values['email'], $values['password'], $values['confirm_password']);

        $myView = new AbstractController();
        $myView->redirect('home');

    }

     // Méthode pour vérifier si un pseudo ou un email existe déjà
     public function checkForm()
     {
         // On récupère le champ et la valeur via la requête POST
         $field = key($_POST);
         $value = $_POST[$field];

 
         // Instance du UserManager pour la vérification
         $manager = new UserManager();
 
         try {
             // Utilisation de la méthode checkInput depuis le modèle UserManager
             $result = $manager->checkInput($field, $value);
             echo json_encode(['status' => $result]);  // Retourne 'exists' ou 'not_exists'
         } catch (Exception $e) {
             // Gestion des erreurs en renvoyant un message d'erreur générique
             echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
         }
     }

}
