<?php

namespace Libs\Core;

class Core {

    private static $instance;

    private function __construct() {
        $this->webRequest = new webRequest();
    }

    private function __clone() {
        
    }

//        private $libsPaht;
//        
//        public function __set($name, $value) {
//            $this->libsPaht = $value;
//        }
//        
//        public function __get($name) {
//            return $this->$name;
//        }

    public function Core() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function __toString() {
        return "algo";
    }

}

?>
