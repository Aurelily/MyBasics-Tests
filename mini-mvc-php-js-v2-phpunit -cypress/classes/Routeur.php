<?php
namespace App\Classes;

/**
 * Class Routeur
 * Créer les routes et trouver les controllers correspondants
 */
class Routeur
{
    private $request;

    private $routes = [
        "home" => ["controller" => 'App\Controller\HomeController', "method" => "showHome"],
        "profile" => ["controller" => 'App\Controller\ProfileController', "method" => "showProfile"],
        "createForm" => ["controller" => 'App\Controller\CreateFormController', "method" => "showCreateForm"],
        "checkForm" => ["controller" => 'App\Controller\CreateFormController', "method" => "checkForm"],
        "addUser" => ["controller" => 'App\Controller\CreateFormController', "method" => "addUser"]
    ];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function renderController()
    {
        $request = $this->request;

        if (key_exists($request, $this->routes)) {
            $controller = $this->routes[$request]['controller'];
            $method = $this->routes[$request]['method'];

            // Instanciation du contrôleur avec le namespace complet
            $currentController = new $controller();
            $currentController->$method();
        } else {
            echo "Erreur 404";
        }
    }
}