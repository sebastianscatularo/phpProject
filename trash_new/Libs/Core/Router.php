<?php

namespace Libs\Core;

/**
 * @author Sebastian Scatularo <sebastianscatularo@gmail.com>
 * @package Libs\Core
 * @license http://www.gnu.org/licenses/gpl.html GNU GPL v3 
 */
class Router {

    private static $instance;

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    /**
     * Router construct a singleton object
     * @return Router
     */
    public function Router() {
        if (self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }

    /**
     * This method allows return a Route object
     * @return Route
     */
    public function getRoute() {
        return new Route(new Request());
    }

}

?>
