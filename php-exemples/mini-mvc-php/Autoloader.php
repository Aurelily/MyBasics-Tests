<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

// On va crée une fonction static (car ne va être instanciée qu'une seule fois au lancement) start() dans une classe Autoloader qui va précharger toutes nos classes

class Autoloader{

    public static function start(){

        // la methode spl_autoload_register permet de lancer automatiquement depuis la classe myAutoload où on se trouve, la fonction autoload
        spl_autoload_register(array(__CLASS__, 'autoload'));

        // J'utilise ces variables SERVER dans des constante pour avoir les liens absolus
        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://'.$host.'/MyBasics-Tests/php-exemples/mini-mvc-php/');
        define('ROOT', $root.'/MyBasics-Tests/php-exemples/mini-mvc-php/');

        define('CONTROLLER', ROOT.'controller/');
        define('VIEW', ROOT.'view/');
        define('MODEL', ROOT.'model/');
        define('CLASSES', ROOT.'classes/');

        // On part de HOST et pas de ROOT pour assets car l'acces au css se fait via une URL et pas un Emplacement dans un dossier
        define('ASSETS', HOST.'assets/'); 

    }


    // Cette fonction teste si la classe existe dans le dossier spécifié et si oui il la charge avec un include
    public static function autoload($class){

        if(file_exists(MODEL.$class.'.php')){
            include_once(MODEL.$class.'.php');
        }else if(file_exists(CLASSES.$class.'.php')){
            include_once(CLASSES.$class.'.php');
        }else if(file_exists(CONTROLLER.$class.'.php')){
            include_once(CONTROLLER.$class.'.php');
        };

    }

}

