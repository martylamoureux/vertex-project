<?php

session_start();

function project_path($parts)
{
    array_unshift($parts, APP_ROOT);
    return implode(DS, $parts);
}

require APP_ROOT.DS."bootstrap".DS."autoload.php";