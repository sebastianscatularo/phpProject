<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mapper
 *
 * @author Sebastian
 */

namespace Libs\Router;

use Libs\Router\Route as Route;

class MapRoute {

    /**
     * Array content a collection of routes;
     * @var Array 
     */
    private $mapRoute = array();
    private $namedRoutes = array();

    public function __construct() {
        ;
    }

    /**
     * 
     * @param Array
     * @return boolean return true which route 
     * is a valid route, false in other case
     */
    private function validateRoute(Route $route) {
        
    }

    public function getRouteByUri($uri) {
        foreach ($this->mapRoute as $route) {
            if ($route->getURI() == $uri)
                return $route;
        }
        return new Route();
    }

    public function add(Route $route) {
        $this->mapRoute[] = $route;
    }

}

?>
