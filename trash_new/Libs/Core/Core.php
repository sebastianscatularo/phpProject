<?php

namespace Libs\Core;

use Libs\Router\Router;

class Core {

    private static $instance;

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    public function Core() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }       

    public function exec(){
        $router = Router::Router();
        $router->dispath();
    }

    public function __toString() {
        return "";
    }

}

?>
