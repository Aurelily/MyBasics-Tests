<?php


/**
 * Class Routeur
 * Créer les routes et trouver les controllers
 */
class Routeur
{
    private $request;

    //
    private $routes = [
        "home"=>["controller"=>'HomeController', "method"=>"showHome"],
        "profile"=>["controller"=>'ProfileController', "method"=>"showProfile"],
        "createForm"=>["controller"=>'CreateFormController', "method"=>"showCreateForm"],
        "checkForm"=>["controller"=>'CreateFormController', "method"=>"checkForm"],
        "addUser"=>["controller"=>'CreateFormController', "method"=>"addUser"]
    ];

    public function __construct($request){
        $this->request = $request;
    }

    public function renderController(){

        $request = $this->request;

        if(key_exists($request, $this->routes))
        {
            $controller = $this->routes[$request]['controller'];
            $method = $this->routes[$request]['method'];

            $currentController = new $controller();
            $currentController->$method();
        }else{
            echo "erreur 404";
        }


        
    }

}