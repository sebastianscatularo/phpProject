<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Router
 *
 * @author sebastian
 */

namespace Libs\Router;

class Router {

    static private $instance;

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    public static function Router() {
        if (self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }
    
    private $hola = "hola";
    
    public function __get($name) {        
        return $this->hola;
    }

}

?>
