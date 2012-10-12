<?php

class Loader {

    private static $instance;

    private function __construct() {
        spl_autoload_register(array($this, 'customLoader'));
    }

    private function __clone() {
        
    }

    public function getLoader() {
        if (self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }

    private function find($search, $cont = 5) {
        $filePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . $search;
        if (($cont == 0) || (is_readable($filePath))) {
            return ($cont == 0) ? false : $filePath;
        } else {
            $path = ".."
                    . DIRECTORY_SEPARATOR
                    . $search;
            return $this->find($path, $cont - 1);
        }
    }

    private function customLoader($className) {
        $fileName = str_replace("\\", DIRECTORY_SEPARATOR, $className)
                . ".php";
        $filePath = $this->find($fileName);
        if ($filePath)
            include_once $filePath;
        else
            throw new Exception("Class not loaded");
    }
    
}

use Libs\Core\Core;

try {
    $loader = Loader::getLoader();    
    $core = Core::Core();
} catch (Exception $e) {
    echo $e->getTraceAsString();
}

//echo $core->webRequest;
//echo new Test();
//try {
//$core = Core::Core();
//$core->libsPath = "hola";
//echo $core->libsPath;
//} catch (Exception $e) {
//    echo $e->getTraceAsString();
////    $logger = \Logger\Logger::getLogger();    
////    $logger->log = $e->getTraceAsString();
//}
//namespace appCore {
////    
////    //var_dump($_SERVER);
////    //unset($_SERVER);
////    //var_dump($_SERVER);
////    
////header("HTTP/1.1 200 OK");
////header("Content-Type: text/html");
////echo <<<HTML
////<h1>hola</h1>
////HTML;
////var_dump(headers_list());
////    header("HTTP/1.1 404 Not Found");
////    header("HTTP/1.1 200 OK");
////    echo <<<HTML
////<h1>hola</h1>
////HTML;
////}
//    var_dump($_SERVER);
//    echo uniqid();
//}
////
////$body = '';
////$fh = fopen('php://input', 'r');
////if ($fh) {
////    while (!feof($fh)) {
////        $s = fread($fh, 1024);
////        if (is_string($s)) {
////            $body .= $s;
////        }
////    }
////    fclose($fh);
////}
////print("-------------- PHP Input Stream ----------------\n$body\n\n");
////
////$body2 = http_get_request_body();
////print("---------- http_get_request_body() -------------\n$body2\n\n");
////
////
////}
?>
