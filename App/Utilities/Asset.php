<?php
namespace App\Utilities;
class Asset{
    // public static function get(string $route):string{
    //     return $_ENV["DOMIAN"].'assets/'.$route;
    // }

    public static function __callStatic($name, $arguments)
    {
        if($name!="get"){
            return $_ENV["DOMAIN"]."assets/{$name}/".$arguments[0]; 
        }
        return $_ENV["DOMAIN"]."assets/".$arguments[0]; 
    }
}