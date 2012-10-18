<?php

namespace Libs\Autoloader;

<<<<<<< HEAD
use \Exception as Exception;

=======
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd
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
<<<<<<< HEAD
            //$filePath = dirname($this->getValue('SCRIPT_FILENAME')) . $separator . $className;
            $filePath = $this->getRootPath() . $separator . $className;
=======
            $filePath = dirname($_SERVER['SCRIPT_FILENAME']) . $separator . $className;
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd
            if (is_readable($filePath))
                return $filePath;
            else
                $separator.= ".." . $separator;
        }
    }

<<<<<<< HEAD
    private function getRootPath() {
        if (key_exists('SCRIPT_FILENAME', $_SERVER))
            return dirname($_SERVER['SCRIPT_FILENAME']);
        throw new Exception("ERROR");
    }

    private function registerLoader($loader) {
        spl_autoload_register($loader);
    }

=======
    private function registerLoader($loader) {
        spl_autoload_register($loader);
    }
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd
}

?>
