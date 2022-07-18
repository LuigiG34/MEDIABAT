<?php

namespace App\Models;

use App\Core\Db;

class UserManager extends Db
{
    public function createUser($fname_user,$lname_user,$email_user,$password_user,$birthdate_user,$status,$city_user,$zipcode_user,$id_job)
    {
        $stmt = Db::getBdd()->prepare('INSERT INTO users (fname_user, lname_user,email_user,password_user,birthdate_user,status,city_user,zipcode_user,id_job) VALUES (?,?,?,?,?,?,?,?,?)');

        $hash_password = password_hash($password_user, PASSWORD_ARGON2I);
        
        $stmt->execute(array($fname_user,$lname_user,$email_user,$hash_password,$birthdate_user,$status,$city_user,$zipcode_user,$id_job));
    }
}