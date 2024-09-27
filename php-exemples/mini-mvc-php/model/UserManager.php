<?php

// On appele ce genre de classe Entity manager.
// Elle contient toutes les fonctions du CRUD d'une classe associée


class UserManager extends Db 
{

    function __construct() {

        parent::__construct($this->bdd);
    }
  
    /**
     * Fonction qui récupère la liste de tous les users de la BDD
     *
     * @return void
     */
    
    public function findAll(){

   

        $query = "SELECT * from users";
       
        $req = $this->bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC)){

            $user = new User();
            $user->setId($row['id']);
            $user->setPseudo($row['pseudo']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);


            $users[]=$user;  // On crée un tableau d'objets que l'on va retourner à la fin de la fonction
            
        };

        return $users; // Ici le retour est un objet
    }

    /**
     * Fonction pour trouver un user avec son id
     *
     * @param [type] $id
     * @return void
     */
    public function findById($id){


        $query = "SELECT * FROM users WHERE id = :id";
       
        $req = $this->bdd->prepare($query);
        $req->bindParam(':id', $id, PDO::PARAM_INT); // lie l'ID au paramètre de la requête
        $req->execute();

        $user = $req->fetch(PDO::FETCH_ASSOC); // récupère directement l'utilisateur dans un tableau associatif

        return $user; // Ici le retour est un tableau asoociatif
    }


    

     /**
      * Fonction pour créer un utilisateur
      *
      * @param [type] $pseudo
      * @param [type] $email
      * @param [type] $password
      * @param [type] $confirm_password
      * @return void
      */
     public function createUser($pseudo, $email, $password, $confirm_password) {
        // Vérification que les mots de passe correspondent
        if ($password !== $confirm_password) {
            throw new Exception("Les mots de passe ne correspondent pas.");
        }

        // Vérification si l'email ou le pseudo existe déjà
        $query = "SELECT * FROM users WHERE email = :email OR pseudo = :pseudo";
        $req = $this->bdd->prepare($query);
        $req->bindParam(':email', $email);
        $req->bindParam(':pseudo', $pseudo);
        $req->execute();

        if ($req->rowCount() > 0) {
            throw new Exception("Le pseudo ou l'email est déjà utilisé.");
        }

        // Hachage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insertion de l'utilisateur dans la base de données
        $query = "INSERT INTO users (pseudo, email, password) VALUES (:pseudo, :email, :password)";
        $req = $this->bdd->prepare($query);
        $req->bindParam(':pseudo', $pseudo);
        $req->bindParam(':email', $email);
        $req->bindParam(':password', $hashed_password);
        $req->execute();

        // Vérification que l'utilisateur a bien été créé
        if ($req->rowCount() > 0) {
            return "L'utilisateur a été créé avec succès.";
        } else {
            throw new Exception("Erreur lors de la création de l'utilisateur.");
        }
    }


    /**
     * Fonction pour vérifier la disponibilité du pseudo ou de l'email.
     *
     * @param [type] $field
     * @param [type] $value
     * @return void
     */
    public function checkInput($field, $value) {
    

        // Requête pour vérifier l'existence du pseudo ou de l'email
        $query = "SELECT * FROM users WHERE $field = ?";
        $req = $this->bdd->prepare($query);
        $req->execute([$value]); 

        // Retourner 'exists' ou 'not_exists'
        if ($req->rowCount() > 0) {
            return 'exists';
        } else {
            return 'not_exists';
        }
    }

}