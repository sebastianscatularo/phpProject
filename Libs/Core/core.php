<?php

namespace Libs\Core;

    class Core {

        private static $core;

        private function __construct() {}

        private function __clone() {}
        
        private $libsPaht;
        
        public function __set($name, $value) {
            $this->libsPaht = $value;
        }
        
        public function __get($name) {
            return $this->$name;
        }

        public function Core() {
            if(self::$core == null){
                self::$core = new self();
            }
            return self::$core;
        }

}

?>
