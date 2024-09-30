<?php
require 'vendor/autoload.php';
use App\Classes\Routeur;

// J'utilise ces variables SERVER dans des constantes pour avoir les liens absolus
$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST', 'http://'.$host.'/MyBasics-Tests/mini-mvc-php-js/');
define('ROOT', $root.'/MyBasics-Tests/mini-mvc-php-js/');
define('ASSETS', HOST.'assets/'); 

// Ici on charge le routeur. C'est le coeur de l'application

// On va faire des routes de ce type http://localhost/MyBasics/index.php?p=home
// Ensuite on fera une réécriture de ça dans le htaccess pour avoir juste http://localhost/MyBasics/home

$request = $_GET['p'];

// Je crée cette fois un vrai routeur à partir d'une classe Routeur.php et d'une méthode renderController qui sera chargé de rendre la View
$routeur = new Routeur($request);
$routeur->renderController();



