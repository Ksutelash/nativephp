<?php


namespace App\Request;


class Requests
{
    public $path;
    public $method;

    public function getPath(){
        $path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
        $position = strpos($path,'?');
        if($position === false)
        {
            return $path;
        }
        return substr($path,0,$position);
    }

    public function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public function resolve(){
        return [
            'path'=>$this->getPath(),
            'method'=>$this->getMethod()
        ];
    }


}