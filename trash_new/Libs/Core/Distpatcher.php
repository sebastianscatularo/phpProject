<?php

namespace Libs\Core;

use Libs\WebApp\WebApp;
use Libs\WebService\WebService;
/**
 * @author Sebastian Scatularo <sebastianscatularo@gmail.com>
 * @package Libs\Core
 * @license http://www.gnu.org/licenses/gpl.html GNU GPL v3
 */
class Distpatcher {

    static private $instance;
    private $loader;

    private function __construct() {
        $this->loader = Loader::Loader();
    }

    private function __clone() {
        
    }

    /**
     * Distpatcher construct a singleton object
     * @return Distpatcher
     */
    public function Distpatcher() {
        if (self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }

    /**
     * @return WebService
     */
    public function WebService() {
        $router = Router::Router();
        return new WebService($router->getRoute());
    }

    /**
     * @return WebApp
     */
    public function WebApp() {
        $router = Router::Router();
        return new WebApp($router->getRoute());
    }

}

?>
