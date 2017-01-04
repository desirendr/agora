<?php

//Chargement des paramètres
include_once ('app/config/server.php');
include_once ('app/config/config.inc.php');
include_once ('app/config/db.inc.php');

//paramétrage des erreurs
if(defined('DEBUG') && DEBUG) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else{
    ini_set('display_errors', 0);
    error_reporting(0);
}

echo "hello prod";