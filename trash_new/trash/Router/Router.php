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
use WebService;
use Libs\Core\Request;

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
    
    public function dispath(){
//        $method = $_SERVER['REQUEST_METHOD'];
//        $controller = explode("/", $_SERVER["REQUEST_URI"]);
//        var_dump($controller[1]);
//        /*var_dump($method);*/
//        try{
//            $request = new $controller[1]();
//            var_dump($request);
//            $request->$method();
//        }  catch (Exception $e) {                        
//            header("404 Not found");
//            
//        }
        $request = new Request();
        var_dump($request);
    }

}

?>
