<?php
    class Pages extends Controller {
        public function __construct(){
            //echo 'Pages loaded';
            $this->postModel = $this->model('Post');
        }

        public function index(){
            //$this->view('HAIIIII'); //ni part base controller

            $post = $this->postModel->getPosts();

            $data = [
                'title' => 'HALOOOOOOOOO',
                'posts' => $post
            ];
            
            //yang ni belajar part loading views
            $this->view('pages/index', $data);
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
            $data = [
                'title' => 'About Us'
            ];

            //part loading views
            $this->view('pages/about', $data);

        }
    }

