<?php

    //nak load config file
    require_once 'config/config.php';

    /*
    //load kat libraries
    require_once 'libraries/core.php';
    require_once 'libraries/controller.php';
    require_once 'libraries/database.php';
    */

    //Autoload core libraries
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });