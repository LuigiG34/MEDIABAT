<?php

namespace App\Models;

use App\Core\Db;
use App\Models\User;
use PDO;

class UserManager extends Db
{

    public function setUser($user)
    {
        $u = new User();
        $u->setId_user($user['id_user'])
        ->setFname_user($user['fname_user'])
        ->setLname_user($user['lname_user'])
        ->setEmail_user($user['email_user'])
        ->setPassword_user($user['password_user'])
        ->setBirthdate_user($user['birthdate_user'])
        ->setStatus($user['status_user'])
        ->setCity_user($user['city_user'])
        ->setZipcode_user($user['zipcode_user'])
        ->setId_job($user['id_job']);
    }
    /**
     * Insert users data in database
     *
     * @param string $fname_user
     * @param string $lname_user
     * @param string $email_user
     * @param string $password_user
     * @param date $birthdate_user
     * @param string $status
     * @param string $city_user
     * @param int $zipcode_user
     * @param int $id_job
     */
    public function createUser($fname_user,$lname_user,$email_user,$password_user,$birthdate_user,$status,$city_user,$zipcode_user,$id_job)
    {
        $stmt = Db::getBdd()->prepare('INSERT INTO users (fname_user, lname_user,email_user,password_user,birthdate_user,status,city_user,zipcode_user,id_job) VALUES (?,?,?,?,?,?,?,?,?)');

        $hash_password = password_hash($password_user, PASSWORD_ARGON2I);
        
        $stmt->execute(array($fname_user,$lname_user,$email_user,$hash_password,$birthdate_user,$status,$city_user,$zipcode_user,$id_job));
    }

    /**
     * get all users data from database
     */
    public function getUsers()
    {
        $stmt = Db::getBdd()->query('SELECT * FROM users');
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    /**
     * get user data by id
     *
     * @param int $id
     */
    public function getUserById($id)
    {
        $stmt = Db::getBdd()->query('SELECT * FROM users WHERE id='.$id);
        $data = $stmt->fetch(PDO::FETCH_OBJ);

        return $data;
    }

    /**
     * Undocumented function
     *
     * @param int $id
     * @param string $img_user
     * @param string $email_user
     * @param string $password
     * @param string $city_user
     * @param int $zipcode_user
     */
    public function updateUserById($id,$img_user,$email_user,$password,$city_user,$zipcode_user)
    {
        $stmt = Db::getBdd()->prepare('UPDATE users SET profil_img = ?, email_user = ?, password_user = ?, city_user = ?, zipcode_user = ? WHERE id='.$id);

        $hash_password = password_hash($password, PASSWORD_ARGON2I);
        return $stmt->execute(array($img_user,$email_user,$hash_password,$city_user,$zipcode_user));
    }

    /**
     * Delete a users data by id
     *
     * @param int $id
     */
    public function deleteUserById($id)
    { 
        $stmt = Db::getBdd()->prepare('DELETE FROM users WHERE id='.$id);
        return $stmt->execute();
    }

}