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

    private static $instance;

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    public static function Router() {
        if (self::$instance == NULL)
            self::$instance = new self();
        return self::$instance;
    }

}

?>
