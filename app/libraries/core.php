<?php
    /*
    * sistem/app Core Class
    * untuk creates url & load core controller
    * url format - /controller/method/params
    */

    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $currentParams = [];

        public function __construct() {
            $this->getUrl();
        }

        public function getUrl(){
            echo $_GET['url'];
        }
    }