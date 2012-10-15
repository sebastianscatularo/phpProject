<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logger
 *
 * @author sebastian
 */

namespace Logger {

    class Logger {

        private static $instance;

        private function __construct() {
            
        }

        private function __clone() {
            
        }

        public static function Logger() {
            if (self::$instance === null)
                self::$instance = new self();
            return self::$instance;
        }

        private $log;

        public function __set($name, $value) {
            file_put_contents(dirname(__FILE__) . "../logs/" . date() . ".log", $value, FILE_APPEND);
            $this->log = $value;
        }

    }

}
?>
