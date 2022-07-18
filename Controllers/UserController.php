<?php

namespace App\Controllers;

use App\Models\UserManager;
use PDO;

class UserController
{
    private $UserManager;

    public function __construct()
    {
        $this->UserManager = new UserManager;
    }
}