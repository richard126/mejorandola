<?php
    //Declarando una función
    function view( $template,$data=array() ) {
        extract($data);
        require "views/$template.tpl.php";
    }

    function controller( $name ){
        $file= "controllers/$name.php";

        if( file_exists( $file ) ) {
            require $file;
        }else{
                header("HTTP/1.0 404 Not Found");
                exit("Página no encontrada");
            }

    }