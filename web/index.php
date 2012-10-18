
<?php

require_once dirname(__FILE__) . "/../Libs/Autoloader/Autoloader.php";
<<<<<<< HEAD

use Libs\Autoloader\Autoloader as Autoloader;
use Libs\Distpatcher\Distpatcher as Distpatcher;
echo "<pre>";
Autoloader::Autoloader();
Distpatcher::Distpatcher()->getApp();
echo "</pre>";
=======
use Libs\Autoloader\Autoloader as Autoloader;
use Libs\Distpatcher\Distpatcher as Distpatcher;

Autoloader::Autoloader();
Distpatcher::Distpatcher()->getApp();
>>>>>>> 3d0df4a9b88296ecd0a0500a5095bf695b0c31bd
?>