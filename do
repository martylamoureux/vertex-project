#!/usr/bin/env php
<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(dirname(__FILE__)));

require APP_ROOT.DS."bootstrap".DS."setup.php";

use Vertex\Framework\Application;

$app = new Application();

if (!$app->isCLI())
    $app->raise(403, "Forbidden. This script must be runned in CLI");

if (count($argv) < 2)
    exit("Missing command\r\n");

$app->runCommand($argv[1]);