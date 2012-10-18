<?php

namespace Libs\Http;

class Request {

    private $requestMethod = "";
    private $requestURI = "";

    public function __construct() {
        $this->requestMethod = $this->setMethod();
        $this->requestURI = $this->setURI();
    }

    private function setURI() {
        if (key_exists("REQUEST_URI", $_SERVER))
            return $_SERVER["REQUEST_URI"];
        return "";
    }

    public function getURI() {
        return $this->requestURI;
    }

    private function setMethod() {
        if (key_exists("_method", $_POST)) {
            $method = strtoupper($_POST["_method"]);
            if (in_array($method, array("PUT", "DELETE")))
                return $method;
        } else {
            return $_SERVER["REQUEST_METHOD"];
        }
    }

    public function getMethod() {
        return $this->requestMethod;
    }

}

?>
