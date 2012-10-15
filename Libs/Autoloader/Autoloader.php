<?php

namespace Libs\Autoloader;

class Autoloader {

    private static $instance;

    private function __clone() {
        
    }

    private function __construct() {
        spl_autoload_register(array($this, 'loadClass'));
    }

    public static function Autoloader() {
        if (self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }

    public function loadClass($className) {
        $className = str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
        $path = $this->findClass($className);
        if ($path)
            include_once $path;
    }

    private function findClass($className) {
        $separator = DIRECTORY_SEPARATOR;
        for ($i = 0; $i < 5; $i++) {
            $filePath = dirname($_SERVER['SCRIPT_FILENAME']) . $separator . $className;
            if (is_readable($filePath))
                return $filePath;
            else
                $separator.= ".." . $separator;
        }
    }

    private function registerLoader($loader) {
        spl_autoload_register($loader);
    }
}

?>
