<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Distpatcher
 *
 * @author sebastian
 */

namespace Libs\Distpatcher;

use Libs\Router\Router as Router;
<<<<<<< HEAD
use Libs\Http\Request as Request;
//use Libs\MVC\MVCDistpatcher as MVCDistpatcher;
=======
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd

class Distpatcher {

    private static $instance;
    private $router;

    private function __construct() {
        $this->router = Router::Router();
    }

    public static function Distpatcher() {
        if (self::$instance == NULL)
            self::$instance = new self();
        return self::$instance;
    }

    public function getApp() {
<<<<<<< HEAD
        /*
         * Si el tipo de contenido a retornar es text/html, se crea una nueva 
         * aplicacion del tipo MVCApplication
         * 
         * Si el tipo de contenido es otro se crea un web service y otro elemento
         */
        Router::Router();//>basePath = "/";
        
        Router::Router()->MapRoute("/User/:id/:mundo", "Welcome", array('method' => 'GET', 'name' => 'index'));
        Router::Router()->MapRoute("/:user", "Welcome:index", array('method' => 'GET', 'name' => 'index2'));
        
        var_dump(Router::Router());
        var_dump(Router::Router()->matchCurrentRequest()->getParameters());

=======
        
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd
    }

}

?>
