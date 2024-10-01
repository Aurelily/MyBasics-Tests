<?php
namespace App\Controller;

class AbstractController
{
    private $template;
    
    // Chemin vers le dossier des vues (sans utiliser une constante)
    private $viewPath = __DIR__ . '/../view/'; // Ajuste ce chemin selon ta structure de projet

    public function __construct($template = null)
    {
        $this->template = $template;
    }

    public function render($variables = [])
    {
        // Extraire les variables pour qu'elles soient accessibles dans la vue
        extract($variables);

        $template = $this->template;

        // On va stocker la vue à rendre dans la mémoire tampon du navigateur
        ob_start();

        // Dans le contrôleur avant d'inclure le template pour savoir dans quelle page on se trouve
        $currentView = $template;

        // Inclusion de la vue via un chemin dynamique (basé sur le namespace)
        include_once($this->viewPath . $template . '.php');

        // Récupérer la sortie mise en tampon
        $contenu = ob_get_clean();

        // Inclure le template général
        include_once($this->viewPath . '_template.php');
    }

    public function redirect($route)
    {
        header("Location: " . HOST . $route);
        exit;
    }
}
