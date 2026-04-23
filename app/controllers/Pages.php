<?php
    class Pages extends Controller {
        public function __construct(){
            //echo 'Pages loaded';
        }

        public function index(){
            //$this->view('HAIIIII'); //ni part base controller

            //yang ni belajar part loading views
            $this->view('pages/index', ['title' => 'HALOOOOOOOOO']);
        }

        /* ni contoh 1
        public function about(){
            echo 'Ni page about';
        }
        */

        /*ni contoh 2
        public function about($id){
            echo $id;
        }
        */

        public function about(){
            //part loading views
            $this->view('pages/about');

        }
    }

