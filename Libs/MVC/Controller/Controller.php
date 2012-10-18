<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author sebastian
 */

namespace Libs\MVC\Controller;

use Libs\Router\MapRoute as MapRoute;

abstract class Controller {
    private $mapRoute;
    protected function setMapRoute(MapRoute $mapRoute){
        $this->mapRoute = $mapRoute;
    }    
}

?>
