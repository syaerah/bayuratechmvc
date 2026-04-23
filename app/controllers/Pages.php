<?php
    class Pages extends Controller {
        public function __construct(){
            //echo 'Pages loaded';
        }

        public function index(){
            $this->view('HAIIIII');
        }

        /* ni contoh 1
        public function about(){
            echo 'Ni page about';
        }
        */

        //ni contoh 2
        public function about($id){
            echo $id;
        }
    }

