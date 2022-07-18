<?php

use App\Autoloader;
use App\Core\Main;

// On definie une constante contenant le dossier racine du projet
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

// On importe l'autoloader
require_once './Autoloader.php';
Autoloader::register();

// On instancie Main (routeur)
$app = new Main();

// Demare l'application
$app->start();