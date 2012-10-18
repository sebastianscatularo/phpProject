<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MVCDistpatcher
 *
 * @author Sebastian
 */

namespace Libs\MVC;

use Libs\Router\Route as Route;

class MVCDistpatcher {

    public function __construct(Route $route) {
        var_dump($route);
    }

}

?>
