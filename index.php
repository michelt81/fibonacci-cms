<?php
require 'vendor/Autoload.php';

$params = explode('/', $_SERVER['REQUEST_URI']);
if($params[0] == ""){
    array_shift($params);
}

$className = 'Fibonacci\controllers\\' . ucfirst($params[0]);
$controller = new $className;
