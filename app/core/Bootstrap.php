<?php

namespace Fibonacci\core;

class Bootstrap
{

    public function __construct()
    {
        $params = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $router = ucfirst($params[0]);

        if (!class_exists('Fibonacci\controllers\\' . $router)) {
            $className = 'Fibonacci\controllers\Error';
        } else {
            $className = 'Fibonacci\controllers\\' . $router;
        }

        $controller = new $className();

        if (isset($params[2])) {
            $controller->{$params[1]}($params[2]);
        } else {
            if (isset($params[1])) {
                $controller->{$params[1]}();
            }
        }
    }
}