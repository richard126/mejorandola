<?php
    class AyudaController   {

        public function indexAction() {
            return new View('ayuda');
        }

        public function solicitarAction($arg) {
            return new View('solicitud',['arg'=>$arg]);
        }

        public function consultarAction($arg) {
            echo 'aqui se consulta la ayuda';
        }

    }