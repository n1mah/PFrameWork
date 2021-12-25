<?php
namespace App\Controllers;
class PostController{
    public function index()
    {
        #DB
        $data=["title"=>"مطالب",
               "description"=>""];
        view("post.index",$data);
    }
    public function single()
    {
        global $request;
        #DB
        $data=["title"=>str_replace("-"," ",urldecode($request->get_route_param("slug"))),
               "description"=>"",
                "slug"=>urldecode($request->get_route_param("slug"))];
        view("post.single",$data);
    }
}