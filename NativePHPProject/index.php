<?php
namespace App;

require_once 'vendor/autoload.php';

use App\Controllers\BaseController;
use App\Routes\Router;


$go_route = new Router();

$go_route->route('/', function (){
    (new BaseController())->render();

});

$go_route->route('/test', function (){
    echo "Hello world";

});
?>

