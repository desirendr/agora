<?php

//Récupération du paramètre de l'url
if(!isset($_GET['module'])){
    $module = DEFAULT_MODULE;
}else{
    $module = $_GET['module'];
}

//Appel du controller du module demandé
$controller = 'app/controller/'.$module.'.php';
if(file_exists($controller)){
    include_once ($controller);
    //Instanciation du controller
    new Controller($module);
}else{
    include_once ('app/view/layouts/erreur.php');
}
