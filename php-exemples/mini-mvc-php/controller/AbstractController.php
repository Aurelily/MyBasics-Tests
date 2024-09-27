<?php
class AbstractController{

    private $template;

    public function __construct($template = null){

        $this->template = $template;
    }

    public function render($variables = []){

        // Extraire les variables pour qu'elles soient accessibles dans la vue
        extract($variables);

        $template = $this->template;

        // On va stocker ensuite la vue à rendre dans la mémoire tampon du navigateur.
        // Pour ça on ouvre la mémoire tampon avec cette méthode : 
        ob_start();
        // Dans le contrôleur avant d'inclure le template pour savoir dans quelle page on se trouve et charger ou non la balise script
        $currentView = $template;
        include_once(VIEW.$template.'.php');
        // Puis on lui dit de stocker l'ensemble de la page dans cette variable la vue à rendre au moment de vider la mémoire tampon
        $contenu = ob_get_clean();
        include_once(VIEW.'_template.php');
    }

    public function redirect($route)
    {
        header("location: ".HOST.$route);
        exit;

    }

    
        
    
}