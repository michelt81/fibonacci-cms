<?php

namespace Fibonacci\core;

class View
{

    public function render($name)
    {
        include(BP . '/app/view/header.php');
        include(BP . '/app/view/' . $name . '.php');
        include(BP . '/app/view/footer.php');

    }
}