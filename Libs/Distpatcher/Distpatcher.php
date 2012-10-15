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
        
    }

}

?>
