<?php

namespace App\Core;

use App\Controllers\ApiController;
/**
 * Router Class
 */
class Main
{
    /**    
     * Start the new app function
     *
     * @return void
     */
    public function start()
    {
        // if there is nothing in url then display 404 ERROR
        if (!isset($_GET['page'])) {
            require URL."public/Views/main/index.php";
        } else {
            // get $url and store each param in an array
            $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
            // If url = case
            switch ($url[0]) {
                case 'accueil':
                    require URL."public/Views/main/index.php";
                    break;

                case 'connexion':
                    require URL."public/Views/auth/connexion.php";
                    break;
                
                case 'inscription':
                    require URL."public/Views/auth/inscription.php";
                    break;

                case 'contact':
                    require URL."public/Views/contact/contact.php";
                    break;
                
                case 'profil':
                    if(isset($url[1]) && $url[1] === "modif"){
                        var_dump($url);
                        require URL."public/Views/users/modifier-profil.php";
                    }else{
                        require URL."public/Views/users/profil.php";
                    }
                    break;
                default:
                    // If none of the above than display 404 ERROR
                    http_response_code(404);
                    require URL."public/views/error/404.php";
                    break;
            }
        }
    }
}
