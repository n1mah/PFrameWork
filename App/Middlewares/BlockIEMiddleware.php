<?php
namespace App\Middlewares;

use App\Middlewares\contract\MiddlewareInterface;

class BlockIEMiddleware implements MiddlewareInterface{
    public function handle()
    {
        global $request;
       //var_dump($request);
        echo 1;
    }
}