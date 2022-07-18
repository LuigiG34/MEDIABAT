<?php

namespace App\Models;

class User
{
    private $id_user;
    private $fname_user;
    private $lname_user;
    private $email_user;

    private $password_user;
    private $password_again;
    private $birthdate_user;
    private $reset_code;

    private $description;
    private $profil_img;
    private $status;
    private $city_user;
    private $zipcode_user;
    private $id_job;

    public function __construct($fname_user,$lname_user,$email_user,$password_user,$password_again,$birthdate_user,$status,$city_user,$zipcode_user,$id_job = null)
    {
        $this->fname_user = $fname_user;
        $this->lname_user = $lname_user;
        $this->email_user = $email_user;
        $this->password_user = $password_user;
        $this->password_again = $password_again;
        $this->birthdate_user = $birthdate_user;
        $this->status = $status;
        $this->city_user = $city_user;
        $this->zipcode_user = $zipcode_user;
        $this->id_job = $id_job;
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
     * Get the value of id_job
     */ 
    public function getId_job()
    {
        return $this->id_job;
    }

    /**
     * Set the value of id_job
     *
     * @return  self
     */ 
    public function setId_job($id_job)
    {
        $this->id_job = $id_job;

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
         * Get the value of password_again
         */ 
        public function getPassword_again()
        {
                return $this->password_again;
        }

        /**
         * Set the value of password_again
         *
         * @return  self
         */ 
        public function setPassword_again($password_again)
        {
                $this->password_again = $password_again;

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
}