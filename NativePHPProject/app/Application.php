<?php

namespace App;

use App\Controllers\BaseController;
use App\Request\Requests;
use App\Routes\Router;

class Application
{
    public $router;
    public $request;
    public $resolve;

    public function __construct(){
        $this->router = new Router();
        $this->request = new Requests();
        $this->resolve = $this->request->resolve();
    }




}