
<?php

require_once dirname(__FILE__) . "/../Libs/Core/Distpatcher.php";
require_once dirname(__FILE__) . "/../Libs/Core/Loader.php";

use Libs\Core\Distpatcher as Distpatcher;

$app = Distpatcher::Distpatcher();
$app->WebApp()->exec();

?>

<?php
//
//class Loader {
//
//    private static $instance;
//
//    private function __construct() {
//        spl_autoload_register(array($this, 'customLoader'));
//    }
//
//    private function __clone() {
//        
//    }
//
//    public static function Loader() {
//        if (self::$instance == null)
//            self::$instance = new self();
//        return self::$instance;
//    }
//
//    private function find($search, $cont = 5) {
//        $separator = DIRECTORY_SEPARATOR;
//        $filePath = dirname(__FILE__) . $separator . $search;
//        for ($i = 0; $i < $cont; $i++) {            
//            if (is_readable($filePath))
//                return $filePath;
//            else
//                $separator .= ".." . $separator;
//        }
//        return false;
//    }
//
//    private function customLoader($className) {
//        try {
//            $fileName = str_replace("\\", DIRECTORY_SEPARATOR, $className)
//                    . ".php";
//            $filePath = $this->find($fileName);
//            //if ($filePath)
//            include_once $filePath;
//        } catch (Exception $e) {
//            //else
//            throw new Exception("Class not loaded");
//        }
//    }
//
//}
//
//use Libs\Core\Core;
//
//try {
//    $loader = Loader::Loader();
//    $core = Core::Core();
//    $core->exec();
////    echo $core;
////    var_dump($_SERVER);
//} catch (Exception $e) {
//    echo $e->getMessage();
//    echo "<br>";
//    echo $e->getTraceAsString();
//}
//
////echo $core->webRequest;
////echo new Test();
////try {
////$core = Core::Core();
////$core->libsPath = "hola";
////echo $core->libsPath;
////} catch (Exception $e) {
////    echo $e->getTraceAsString();
//////    $logger = \Logger\Logger::getLogger();    
//////    $logger->log = $e->getTraceAsString();
////}
////namespace appCore {
//////    
//////    //var_dump($_SERVER);
//////    //unset($_SERVER);
//////    //var_dump($_SERVER);
//////    
//////header("HTTP/1.1 200 OK");
//////header("Content-Type: text/html");
//////echo <<<HTML
//////<h1>hola</h1>
//////HTML;
//////var_dump(headers_list());
//////    header("HTTP/1.1 404 Not Found");
//////    header("HTTP/1.1 200 OK");
//////    echo <<<HTML
//////<h1>hola</h1>
//////HTML;
//////}
////    var_dump($_SERVER);
////    echo uniqid();
////}
//////
//////$body = '';
//////$fh = fopen('php://input', 'r');
//////if ($fh) {
//////    while (!feof($fh)) {
//////        $s = fread($fh, 1024);
//////        if (is_string($s)) {
//////            $body .= $s;
//////        }
//////    }
//////    fclose($fh);
//////}
//////print("-------------- PHP Input Stream ----------------\n$body\n\n");
//////
//////$body2 = http_get_request_body();
//////print("---------- http_get_request_body() -------------\n$body2\n\n");
//////
//////
//////}
?>
