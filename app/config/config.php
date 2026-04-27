<?php
    //nak setup nDatabase Params
    define('DB_HOST', 'localhost');
    define('DB_USER', 'caerah');
    define('DB_PASS', '123456');
    define('DB_NAME', 'bmvc');


    //App root

    // ni kalau nak display D:\Xampp\htdocs\bayuratechmvc\app\config\config.php
    // echo __FILE__;

    // kalau nak hide config.php (D:\Xampp\htdocs\bayuratechmvc\app\config)
    // echo dirname(__FILE__);

    // kalau nak display D:\Xampp\htdocs\bayuratechmvc\app ni je
    // echo dirname(dirname(__FILE__));
    define ('APPROOT', dirname(dirname(__FILE__)));

    //URL root
    define ('URLROOT', 'http://localhost/bayuratechmvc/public');

    //Site names
    define('SITENAME', 'BayuratechMVC');