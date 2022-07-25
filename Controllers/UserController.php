<?php

namespace App\Controllers;

use App\Models\UserManager;

class UserController
{
    private $UserManager;

    public function __construct()
    {
        $this->UserManager = new UserManager;
    }

    
    public function signUpUser()
    {
        if(isset($_POST['submit'])){
            $fname = htmlspecialchars($_POST['fname']);
            $lname = htmlspecialchars($_POST['lname']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $city = htmlspecialchars($_POST['city']);
            $zipcode = htmlspecialchars($_POST['zipcode']);
            $birthdate = htmlspecialchars($_POST['date']);
            $status = htmlspecialchars($_POST['status']);
            if(isset($_POST['metier'])){
                $job = htmlspecialchars($_POST['metier']);
            }else{
                $job = "null";
            }
            
            $this->UserManager->signUp($fname,$lname,$email,$password,$birthdate,$status,$city,$zipcode,$job);
        }
    }

    public function signInUser()
    {
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->UserManager->signIn($email,$password);
            header("Location: accueil");
        }
    }
}