<?php
/**
 * Created by PhpStorm.
 * User: ddleb
 * Date: 18/11/2016
 * Time: 14:59
 */

if(SERVER === "DEV"){

    /**
     * Constantes spécifiques pour config le serveur de dev
     * DEBUG = pour savoir si on affiche les bugs ou pas
     * RUN = Pour la page d'attente, on ne s'en sert pas pour le moment
     * GA = Google analytics, on ne veut pas que google juge les données des servers test etc, fausse les analyses
     */
    define('DEBUG', true);
    define('RUN', 'NORMAL');
    define('GA', true);


}elseif (SERVER === "TEST"){

    /**
     * Constantes spécifiques pour config le serveur de test
     */
    define('DEBUG', true);
    define('RUN', 'NORMAL');
    define('GA', false);


}elseif (SERVER === "PROD"){

    /**
     * Constantes spécifiques pour config le serveur de prod
     */
    define('DEBUG', false);
    define('RUN', 'WAIT');
    define('GA', true);

}

define('SITE_NAME', 'MySite');
define('DEFAULT_MODULE', 'index');
define('PAGINATION', 5);
