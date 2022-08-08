<?php
namespace App;

use App\Request\Requests;

require_once 'vendor/autoload.php';

$app = new Application;

var_dump($app->resolve);


$app->router->make('/', 'get', function (){
    return 'Hello world';
});

$app->router->make('/', 'post', function (){
    return 'Hello world';
});

?>

