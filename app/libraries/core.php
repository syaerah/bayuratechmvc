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
            // echo $_GET['url']; (yang ni untuk bab bootstrap & core)

            // ni untuk belajar loading controller
            // print_r($this->getUrl());

            //sambungan
            $url = $this->getUrl();

            //nak tengok controller untuk 1st value
            if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                //kalau exists, set as controller
                $this->currentController = ucwords($url[0]);
                //unset 0 Index
                unset($url[0]);
            }

            //require controller
            require_once '../app/controllers/' . $this->currentController . '.php';

            //Instantiate controller class
            $this->currentController = new $this->currentController;
        }

        public function getUrl(){

            if(isset($_GET['url'])){
                $url = rtrim ($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }


        