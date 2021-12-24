<?php
namespace App\Middlewares;

use App\Middlewares\contract\MiddlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;
class BlockIEMiddleware implements MiddlewareInterface{
    public function handle()
    {
       if(Browser::isIE()){
           die("IE is blocked");
       }
    }
}