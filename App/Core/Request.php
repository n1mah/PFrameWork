<?php
namespace App\Core;
class Request{
    private $params;
    private $ip;
    private $method;
    private $agent;
    public function __construct()
    {
        $this->params=$_REQUEST;
        $this->agent=$_SERVER["HTTP_USER_AGENT"];
        $this->method=$_SERVER["REQUEST_METHOD"];
        $this->ip=$_SERVER["REMOTE_ADDR"];
        $this->uri=strtok($_SERVER["REQUEST_URI"],"?");
    }   
    public function params()
    {
        return $this->params;
    }  
    public function input($key)
    {
        return $this->params[$key] ?? null;
    }
    public function agent()
    {
        return $this->agent;
    }
    public function method()
    {
        return $this->method;
    }
    public function ip()
    {
        return $this->ip;
    }
    public function uri()
    {
        return $this->uri;
    }
    public function isset(string $key):bool
    {
        return isset($this->params[$key]);
    }
    public function redirect($route)
    {
        header("Location: ".site_url($route));
        die();
    }
}