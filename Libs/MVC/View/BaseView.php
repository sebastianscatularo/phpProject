<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseView
 *
 * @author sebastian
 */

namespace Libs\MVC\View;

use \Libs\Router\MapRoute as MapRoute;
use \Libs\Router\Router as Router;

abstract class BaseView {
    private $mapRoute;
    public function __construct() {
        $this->mapRoute = Router::Router()->getMapRoute();
    }
}

?>
