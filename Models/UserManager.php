<?php

namespace App\Models;

use App\Core\Db;
use App\Models\User;
use PDO;

class UserManager extends Db
{
    /**
     * sets user basic data
     *
     * @param $id
     * @param $fname
     * @param $lname
     * @param $email
     * @param $password
     * @param $birthdate
     * @param $status
     * @param $registration
     * @param $city
     * @param $zipcode
     * @param $user_job
     */
    public function setUserBasic($id,$fname,$lname,$email,$password,$birthdate,$status,$registration,$city,$zipcode,$user_job)
    {
        $user = new User();
        $user->setId_user($id)
        ->setFname_user($fname)
        ->setLname_user($lname)
        ->setEmail_user($email)
        ->setPassword_user($password)
        ->setBirthdate_user($birthdate)
        ->setRegistration_date($registration)
        ->setStatus($status)
        ->setCity_user($city)
        ->setZipcode_user($zipcode)
        ->setJob_user($user_job);

        $user->setSession();
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
    public function signUp($fname_user,$lname_user,$email_user,$password_user,$birthdate_user,$status,$city_user,$zipcode_user,$job_user)
    {
        $stmt = Db::getBdd()->prepare('INSERT INTO users (fname_user, lname_user,email_user,password_user,birthdate_user,status,city_user,zipcode_user,job_user) VALUES (?,?,?,?,?,?,?,?,?)');

        $hash_password = password_hash($password_user, PASSWORD_ARGON2I);
        
        $stmt->execute(array($fname_user,$lname_user,$email_user,$hash_password,$birthdate_user,$status,$city_user,$zipcode_user,$job_user));
    }

    /**
     * sign In
     *
     * @param $email
     * @param $password
     */
    public function signIn($email,$password)
    {
        // on recupere user grace a son email
        $stmt = Db::getBdd()->prepare('SELECT password_user FROM users WHERE email = ?;');
        $stmt->execute($email);

        $pass = $stmt->fetchALL(PDO::FETCH_ASSOC);
        var_dump($pass);
        $comparePasswords = password_verify($password, $pass[0]["password_user"]);
        if($comparePasswords == true){
            $stmt = Db::getBdd()->prepare('SELECT * FROM users WHERE email_user = ? AND password_user = ?');

            $stmt->execute(array($email,$password));

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            var_dump($user);
        }

            // on instancie un User avec les infos de bases
            // $this->setUserBasic(
            //     $userArray[0]->id_user,
            //     $userArray[0]->fname_user,
            //     $userArray[0]->lname_user,
            //     $userArray[0]->email_user,
            //     $userArray[0]->password_user,
            //     $userArray[0]->birthdate_user,
            //     $userArray[0]->status,
            //     $userArray[0]->registration_date_user,
            //     $userArray[0]->city_user,
            //     $userArray[0]->zipcode_user,
            //     $userArray[0]->job_user
            // );

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
        $stmt = Db::getBdd()->query('SELECT * FROM users WHERE id_user='.$id);
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