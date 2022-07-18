<?php

namespace App\Core;

use PDO;
use PDOException;

/**
 * Database class
 */
class Db extends PDO
{
    // Instance unique de la class
    private static $instance;

    // Informations de bdd
    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = 'mediabat';

    // set bdd
    public function __construct()
    {
        // DSN bdd
        $_dsn = "mysql:host=".self::DBHOST.";dbname=".self::DBNAME;
        
        // On appelle le constructeur de la class PDO
        try {
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            // $this fait reference a PDO ici
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // get bdd
    public static function getBdd() : self
    {
        if(self::$instance === null){
            // new self = new Db()
            self::$instance = new self();
        }
        return self::$instance;
    }
}