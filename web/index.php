
<?php

require_once dirname(__FILE__) . "/../Libs/Autoloader/Autoloader.php";

use Libs\Autoloader\Autoloader as Autoloader;
use Libs\Distpatcher\Distpatcher as Distpatcher;
echo "<pre>";
Autoloader::Autoloader();
Distpatcher::Distpatcher()->getApp();
echo "</pre>";
?>