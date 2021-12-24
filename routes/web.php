<?php
use App\Core\Routing\Route;
// Route::get('/',function(){
//     view("home.index");
// });
// Route::get('/',['HomeController','index']);
Route::get('/','HomeController@index');
Route::get('/about','AboutController@index');
// Route::add(['get','post'],'/',function(){
//     echo "test1";
// });