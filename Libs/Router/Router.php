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

<<<<<<< HEAD
use Libs\Router\Route as Route;
use Libs\Http\Request as Request;
use Exception as Exception;


class Router {

    private static $instance;
    private $basePath = "";
    private $mapRoute = array();
=======
class Router {

    private static $instance;
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    public static function Router() {
        if (self::$instance == NULL)
            self::$instance = new self();
        return self::$instance;
    }

<<<<<<< HEAD
    public function MapRoute($routeURL, $target, array $params = array()) {
        $route = new Route();
        $route->setURI($this->basePath . $routeURL);
        $route->setTarget($target);
        if (key_exists("method", $params))
            $route->setMethods(explode(",", $params["method"]));
        if (key_exists("filters", $params))
            $route->setFilters($params["filters"]);
        if (key_exists("name", $params)) //{
            $route->setName($params["name"]);
        $this->mapRoute[$route->getName()] = $route;
    }

    public function matchCurrentRequest() {
        $request = new Request();
        return $this->match($request->getURI(), $request->getMethod());
    }

    public function match($requestUrl, $requestMethod) {
        foreach ($this->mapRoute as $route) {            
            if (!in_array($requestMethod, $route->getMethods()))
                continue;
            var_dump(preg_match("@^" . $route->getRegex() . "*$@i", $requestUrl, $matches));
            var_dump($matches);
            if (!preg_match("@^" . $route->getRegex() . "*$@i", $requestUrl, $matches))
                continue;
            $params = array();
            if(preg_match_all("/:([\w-]+)/", $route->getURI(), $argument_keys)) {
                $argument_keys = $argument_keys[1];
                foreach($argument_keys as $key => $name) {
                    if(isset($matches[$key +1]))
                        $params[$name] = $matches[$key +1];
                }
            }
            $route->setParameters($params);
            return $route;
        }
        throw new Exception("Not route match");
        //return new Route();
    }
    
    public function generate($routeName, array $params = array()) {
        if(!isset($this->mapRoute[$routeName]))
            throw new Exception("Route name inexistent: $routeName");
        $url = $this->mapRoute[$routeName]->getURI();
        if($params && preg_match_all("/:(\w+)/", $url, $params_keys)) {
            $params_keys = $params_keys[1];
            foreach ($params_keys as $i => $key) {
                if(isset($params[$key]))
                    $url = preg_replace("/:(\w+)/", $params[$key], $url, 1);
            }
        }
        return $url;
    }

    /*
      //    public function getRoute(Request $request) {
      //        $route = new Route();
      //        $uri = $request->getRequestURI();
      //        foreach ($this->parseURI($uri) as $value) {
      //
      //        }
      //
      //        return new Route();
      //    }

      //    private function parseURI($uri) {
      //        var_dump($uri);
      //        $route = new Route();
      //
      //        return array();
      //    }
     */

    public function getMapRoute() {
//        $fileRoutes = dirname(__FILE__) . "/Config/Routes.json";
//        if (!is_readable($fileRoutes))
//            throw new Exception("ERROR: Routes.json file don't exist or not readable");
//        $routes = file_get_contents($fileRoutes);
//        $objectRoutes = json_decode($routes);
//        $array = (array) $objectRoutes->routes;        
//        foreach ($array as $key => $value) {
//            $route = new Route();
//            $route->setApp($value->app);
//            $route->setController($value->controller);
//            $route->setAction($value->action);
//            $route->setMethod($value->method);
//            $route->setURI($key);
//            $this->mapRoute->add($route);
//        }        
//        return $this->mapRoute;
    }

    public function getApplication(Request $request) {
//        $uri = explode("/", $request->getRequestURI());
//        $part = array("controller", "action", "parameters");
//        $uriParsed = array();
//        while (list($clave, $valor) = each($uri)) {
//            if (empty($uri[$clave]))
//                unset($uri[$clave]);
//        }
//        foreach ($uri as $value) {
//            $uriParsed[current($part)] = $value;
//            next($part);
//        }
//
//        return new $uriParsed['controller']();
        //var_dump($uriParsed);
        //return new $uri['app'];
        /* $mapRoute = $this->getMapRoute();
          $route = $mapRoute->getRouteByUri($request->getRequestURI());
          var_dump($route); */
    }

=======
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd
}

?>
