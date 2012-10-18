
<?php

require_once dirname(__FILE__) . "/../Libs/Core/Distpatcher.php";
require_once dirname(__FILE__) . "/../Libs/Core/Loader.php";

use Libs\Core\Distpatcher as Distpatcher;

$app = Distpatcher::Distpatcher();
var_dump($app);
$app->WebService()->exec();
?>