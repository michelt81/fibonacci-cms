<?php

namespace Fibonacci\controllers;

use Fibonacci\core\Controller;

class Help extends Controller
{
    public function __construct()
    {
        parent::__construct();
        echo 'Help';
    }

    public function instructions($args = false)
    {
        echo 'Instructions';
        echo '<br>args: ' . $args;
    }
}