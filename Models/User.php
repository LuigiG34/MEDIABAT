<?php

namespace App\Models;

class User
{
    private $id_user;
    private $fname_user;
    private $lname_user;
    private $email_user;

    private $password_user;
    private $birthdate_user;
    private $registration_date;
    private $reset_code;

    private $description;
    private $profil_img;
    private $status;
    private $city_user;
    private $zipcode_user;
    private $job_user;

    /**
     * Create USER session
     *
     */
    public function setSession()
    {
        $_SESSION['USER'] = [
            "id" => $this->id_user,
            "fname" => $this->fname_user,
            "lname" => $this->lname_user,
            "email" => $this->email_user,
            "password" => $this->password_user,
            "birthdate" => $this->birthdate_user,
            "status" => $this->status,
            "registration_date" => $this->registration_date,
            "city_user" => $this->city_user,
            "zipcode_user" => $this->zipcode_user,
            "job_user" => $this->job_user
        ];
    }
    /**
     * Get the value of id_user
     */
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of fname_user
     */
    public function getFname_user()
    {
        return $this->fname_user;
    }

    /**
     * Set the value of fname_user
     *
     * @return  self
     */
    public function setFname_user($fname_user)
    {
        $this->fname_user = $fname_user;

        return $this;
    }

    /**
     * Get the value of lname_user
     */
    public function getLname_user()
    {
        return $this->lname_user;
    }

    /**
     * Set the value of lname_user
     *
     * @return  self
     */
    public function setLname_user($lname_user)
    {
        $this->lname_user = $lname_user;

        return $this;
    }

    /**
     * Get the value of birthdate_user
     */
    public function getBirthdate_user()
    {
        return $this->birthdate_user;
    }

    /**
     * Set the value of birthdate_user
     *
     * @return  self
     */
    public function setBirthdate_user($birthdate_user)
    {
        $this->birthdate_user = $birthdate_user;

        return $this;
    }

    /**
     * Get the value of reset_code
     */
    public function getReset_code()
    {
        return $this->reset_code;
    }

    /**
     * Set the value of reset_code
     *
     * @return  self
     */
    public function setReset_code($reset_code)
    {
        $this->reset_code = $reset_code;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of profil_img
     */
    public function getProfil_img()
    {
        return $this->profil_img;
    }

    /**
     * Set the value of profil_img
     *
     * @return  self
     */
    public function setProfil_img($profil_img)
    {
        $this->profil_img = $profil_img;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of city_user
     */
    public function getCity_user()
    {
        return $this->city_user;
    }

    /**
     * Set the value of city_user
     *
     * @return  self
     */
    public function setCity_user($city_user)
    {
        $this->city_user = $city_user;

        return $this;
    }

    /**
     * Get the value of zipcode_user
     */
    public function getZipcode_user()
    {
        return $this->zipcode_user;
    }

    /**
     * Set the value of zipcode_user
     *
     * @return  self
     */
    public function setZipcode_user($zipcode_user)
    {
        $this->zipcode_user = $zipcode_user;

        return $this;
    }


    /**
     * Get the value of password_user
     */
    public function getPassword_user()
    {
        return $this->password_user;
    }

    /**
     * Set the value of password_user
     *
     * @return  self
     */
    public function setPassword_user($password_user)
    {
        $this->password_user = $password_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of registration_date
     */
    public function getRegistration_date()
    {
        return $this->registration_date;
    }

    /**
     * Set the value of registration_date
     *
     * @return  self
     */
    public function setRegistration_date($registration_date)
    {
        $this->registration_date = $registration_date;

        return $this;
    }

    /**
     * Get the value of job_user
     */ 
    public function getJob_user()
    {
        return $this->job_user;
    }

    /**
     * Set the value of job_user
     *
     * @return  self
     */ 
    public function setJob_user($job_user)
    {
        $this->job_user = $job_user;

        return $this;
    }
}
