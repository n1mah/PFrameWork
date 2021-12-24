<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;

include "bootstrap/init.php";


// Route::get('/',function(){
//     view("home.index");
// });
// Route::get('/',['HomeController','index']);
Route::get('/','HomeController@index');
 
// Route::add(['get','post'],'/',function(){
//     echo "test1";
// });



$router=new \App\Core\Routing\Router();
$router->run();