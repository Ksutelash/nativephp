<?php
namespace App\Routes;

use App\Controllers\BaseController;
use App\Request\Requests;


class Router
{
    protected $routes = [];


    function make($path, $method, callable $callback){

    }

    function route($path, callable $callback)
    {

        $routes[$path] = $callback;
        $uri = (new Requests())->getPath();

        foreach($routes as $path => $callback)
        {
            if ($path !== $uri) continue;
            $callback();
        }

    }

}