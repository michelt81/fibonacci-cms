<?php

namespace Fibonacci\controllers;

use Fibonacci\core\Controller;

class Error extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->title = "Error";
        $this->view->render('error/index');
    }
}