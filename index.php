<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;

include "bootstrap/init.php";

//$request->redirect("index2.php");
// var_dump($request);
Route::get('/null');
Route::get('/',function(){
    echo "tst";
});
Route::add(['get','post'],'/',function(){
    echo "test1";
});
Route::get('/ps',['Controller','method']);
Route::get('/articles','Controller@method');
// var_dump(Route::routes());

$router=new \App\Core\Routing\Router();
$router->run();