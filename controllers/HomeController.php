<?php
    class HomeController {

        public function indexAction() {

            return $view = new View('home',['titulo'=>'MejorandolaPHP']);
        }
    }