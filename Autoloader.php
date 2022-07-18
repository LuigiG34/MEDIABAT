<?php 

namespace App;

/**
 * Autoloader class
 */
class Autoloader
{
    static function register()
    {
        // detects "new" class
        spl_autoload_register([
            // Gets the class
            __CLASS__,
            // function autoload() starts
            'autoload'
        ]);
    }

    static function autoload($class)
    {  
        // get entire namespace of class
        
        // get rid of "App\"
        $class = str_replace(__NAMESPACE__.'\\', '', $class);
        // replace "\" by "/"
        $class = str_replace('\\','/', $class);

        // verify if file exist
        $fichier =  __DIR__.'/'.$class.'.php';

        if(file_exists($fichier)){
            require_once $fichier;
        }
    }
}