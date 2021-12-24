<?php
use App\Core\Routing\Route;
use App\Middlewares\BlockIEMiddleware;

// Route::get('/',function(){
//     view("home.index");
// });
// Route::get('/',['HomeController','index']);
Route::get('/','HomeController@index');
Route::get('/about','AboutController@index');
Route::get('/test','HomeController@index',[BlockIEMiddleware::class]);
// Route::add(['get','post'],'/',function(){
//     echo "test1";
// });