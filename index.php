<?php
/*
 * El frontend controller se encarga de configurar nuestra aplicación
 * */

    require 'config.php';
    require 'helpers.php';

    //library
    require 'library/Request.php';
    require 'library/Inflector.php';
    require 'library/Response.php';
    require 'library/View.php';

    //llamar a controlador indicado
     if( empty( $_GET['url'] ) ) {

         $url = "";

     }else {

         $url = $_GET['url'];

     }
    
    $request = new Request( $url );

    $request->execute();
