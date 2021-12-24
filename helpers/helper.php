<?php

function site_url(string $route):string{
  return $_ENV["DOMAIN"].$route;
}

function asset_url(string $route):string{
    return site_url("assets/".$route);
}

function view($path,$data=[]){
  extract($data);
  $path=str_replace(".",'/',$path);
  $view=BASEPATH."views/{$path}.php";
  include $view;
}