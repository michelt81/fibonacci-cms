<?php

namespace Fibonacci\controllers;

use Fibonacci\core\Controller;

class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo 'We are in index';
    }
}