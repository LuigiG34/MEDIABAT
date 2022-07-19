<?php

namespace App\Controllers;

use App\Models\UserManager;

class UserController extends GlobalController
{
    private $UserManager;

    public function __construct()
    {
        $this->UserManager = new UserManager;
    }

    public function signUpUser()
    {
        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $city = $_POST['city'];
            $zipcode = $_POST['zipcode'];
            $birthdate = $_POST['birthdate'];
            $status = $_POST['status'];
            if(isset($_POST['job'])){
                $job = $_POST['job'];
            }
        }
    }
}