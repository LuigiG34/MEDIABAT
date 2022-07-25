<?php

namespace App\Core;

use App\Controllers\UserController;

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
        $UserController = new UserController();
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
                    $UserController->signInUser();
                    require URL."public/Views/auth/connexion.php";
                    break;
                
                case 'inscription':
                    $UserController->signUpUser();
                    require URL."public/Views/auth/inscription.php";
                    break;

                case 'contact':
                    require URL."public/Views/contact/contact.php";
                    break;
                
                case 'profil':
                    

                    if(isset($url[1])){
                        switch($url[1])
                        {
                        case 'modif':
                            if(isset($url[2])){
                                http_response_code(404);
                                require URL."public/views/error/404.php";
                            }else{
                                require URL."public/Views/users/modifier-profil.php";
                            }
                            break;
                        default:
                            http_response_code(404);
                            require URL."public/views/error/404.php";
                            break;
                        }   
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
