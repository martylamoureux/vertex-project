<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(dirname(dirname(__FILE__))));

require APP_ROOT.DS."bootstrap".DS."setup.php";

use Vertex\Framework\Application;

$app = new Application();
$app->render();