<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(dirname(__FILE__)));
define('CONTROLLER_ACCESSOR', 'c');
define('ACTION_ACCESSOR', 'p');

require APP_ROOT.DS."bootstrap".DS."autoload.php";
require APP_ROOT.DS."bootstrap".DS."setup.php";

use Vertex\Vertex\Framework\Application;

$app = new Application();
$app->render();