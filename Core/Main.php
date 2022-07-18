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
            http_response_code(404);
            require "public/404.php";
        } else {
            // get $url and store each param in an array
            $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
            // If url = case
            switch ($url[0]) {
                default:
                    // If none of the above than display 404 ERROR
                    http_response_code(404);
                    require "../public/views/error/404.php";
                    break;
            }
        }
    }
}
