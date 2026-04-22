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

            // okay yang ni url 2nd value
            if(isset($url[1])){
                //nak check method to ada tak dalam controller
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    //unset 1 index
                    unset($url[1]);

                }
            } 

            //echo $this->currentMethod; //yang ni part kalau nak display kat http://localhost/bayuratechmvc/pages/about perkataan about

            //Get params
            $this->params = $url ? array_values($url) : [];

            //panggil balik array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
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


        