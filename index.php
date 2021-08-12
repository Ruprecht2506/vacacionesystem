<?php
    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);

    ini_set('display_errors', false);

    ini_set('log_errors', TRUE);

    ini_set("error_log", "/Library/WebServer/Documents/www/appfull/php-error.log");
    error_log("Inicio de aplicacion web");

    require_once 'libs/database.php';
    require_once 'config/config.php';
    header("location: dashboard.php");

?>