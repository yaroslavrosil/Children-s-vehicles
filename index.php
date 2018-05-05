<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

define('BASE_PATH', __DIR__);

require_once(__DIR__ . '/Autoload.php');
spl_autoload_register(['Autoload', 'loader']);

use common\Config;
use common\Router;

$config = require_once(__DIR__ . '/configs/web.php');
Config::getInstance()->load($config);

try {
    $controller = Router::getInstance()->getController();
    $action = Router::getInstance()->getAction();

    if (class_exists($controller)) {
        $object = new $controller();
        if (method_exists($object, $action)) {
            echo $object->$action(Router::getInstance()->getParameters());
            exit;
        }
    }
}
catch (Exception $ex) {
    die($ex->getMessage());
}
