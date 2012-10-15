<?php

namespace Libs\Core;

use Exception;

/**
 * @author Sebastian Scatularo <sebastianscatularo@gmail.com>
 * @package Libs\Core
 * @license http://www.gnu.org/licenses/gpl.html GNU GPL v3 
 */
class Loader {

    private static $instance;

    private function __construct() {
        spl_autoload_register(array($this, 'loaderMethod'));
    }

    private function __clone() {
        
    }

    /**
     * Loader Construct a singleton object
     * @return Loader
     */
    public function Loader() {
        if (self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }

    /**
     * This function allows register custom function load class
     * @param $loader custom function allows load class
     * @param $loader array(object, method loader)
     */
    public function registerLoader($loader) {
        spl_autoload_register($loader);
    }

    private function findPath($pathSearched) {
        $separator = DIRECTORY_SEPARATOR;
        for ($i = 0; $i < 5; $i++) {
            $filePath = dirname(__FILE__) . $separator . $pathSearched;
            if (is_readable($filePath))
                return $filePaht;
            else
                $separator.= ".." . $separator;
            //var_dump(is_readable($filePath));
        }
    }

    private function loaderMethod($className) {
        try {
            $className = str_replace("\\", DIRECTORY_SEPARATOR, $className)
                    . ".php";
            $filePath = $this->findPath($className);
            include_once $filePath;
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

}

?>
