<?php

    class View extends Response{

        protected $template;
        protected $vars = array();

        public function __construct( $template,$vars=array() ) {

            $this->template = $template;
            $this->vars = $vars;

        }

        /**
         * @return mixed
         */
        public function getTemplate()
        {
            return $this->template;
        }

        /**
         * @return array
         */
        public function getVars()
        {
            return $this->vars;
        }

        public function getTemplateFileName($template) {
            return "views/$template.tpl.php";
        }



        public function execute()
        {
            $template = $this->getTemplate();
            $vars = $this->getVars();

            call_user_func( function() use ( $template, $vars ) {

                $this->executeTmp( $template, $vars );

            } );

        }

        public function executeTmp( $template, $vars ) {

            extract( $vars );

            ob_start();
            //cambiar tipo de formao para enviar las siguientes templates
            require $this->getTemplateFileName($template);

            $tpl_content = ob_get_clean();

            require "views/layout.tpl.php";
        }

    }
