<?php
namespace App\Routes;

use App\Controllers\BaseController;


class Router
{
    public $routes = [];

    function route($path, callable $callback)
    {


        $routes[$path] = $callback;
        $uri = $_SERVER['REQUEST_URI'];
            foreach($routes as $path => $callback)
            {
                if ($path !== $uri) continue;
                $callback();
            }

    }

}