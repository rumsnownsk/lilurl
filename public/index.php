<?php

if (PHP_MAJOR_VERSION < 8){
    die("Require PHP version >= 8");
}
ini_set('display_errors', 1);
error_reporting(-1);

require_once __DIR__."/../config/config.php";
require_once __DIR__."/../core/helpers.php";
require_once ROOT."/vendor/autoload.php";

$whoops = new \Whoops\Run;
if (DEBUG) {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler())->register();
} else {
    $whoops->pushHandler(new \Whoops\Handler\CallbackHandler(function (Throwable $e){
        error_log(
            PHP_EOL."______ [" . date('Y-m-d H:i:s'). "]______"
            . PHP_EOL."  Error: {$e->getMessage()};"
            . PHP_EOL."  File: {$e->getFile()};"
            . PHP_EOL. "  Line: {$e->getLine()};",3, ERROR_LOGS);
        abort('Some error', 500);
    }))->register();
}


$app = new \AppPHP\Application();
require_once CONFIG.'/routes.php';

$app->run();