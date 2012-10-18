<<<<<<< HEAD
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author Sebastian
 */

namespace Libs\Router;

class Route {

    private $uri = "";
    private $target = "";
    private $name = "";
    private $methods = array("GET", "POST", "PUT", "DELETE");
    private $filters = array();
    private $parameters = array();

    public function __construct() {
        
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setURI($uri) {
        $this->uri = $uri;
    }

    public function getURI() {
        return $this->uri;
    }

    public function setTarget($target) {
        $this->target = $target;
    }
    
    public function getTarget() {
        return $this->target;
    }

    public function setMethods(array $methods) {
        $this->methods = $methods;
    }

    public function getMethods() {
        return $this->methods;
    }

    public function setFilters(array $filters) {
        $this->filters = $filters;
    }

    public function getRegex() {
        return preg_replace_callback(
                        "/:(\w+)/", array(&$this, 'getFilters'), $this->uri);
    }

    private function getFilters($matches) {
        if (isset($matches[1]) && isset($this->filters[$matches[1]]))
            return $this->filters[$matches[1]];
        return "([\w-]+)";
    }

    public function setParameters(array $parameters) {
        $this->parameters = $parameters;
    }

    public function getParameters() {
        return $this->parameters;
    }

}

?>
=======
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author Sebastian
 */
class Route {
    //put your code here
}

?>
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd
