<?php

include "bootstrap/init.php";

$router=new \App\Core\Routing\Router();
$router->run();

// $route_pattern='/\/post\/(?<slug>[-%\w]+)$/';
// $route_pattern='/\/post\/(?<slug>[-%\w]+)$/';
// $uri1='/post/what-is-php';
// $uri2='/post/222/asdas/21321';
// $r=preg_match($route_pattern,$uri1);
// echo $r;
// echo "<br>";
// $r=preg_match($route_pattern,$uri2);
// echo $r;
// echo "<br>";
// echo "<br>";
// echo "<br>";

// $route='/post/{slug}';
// echo $route_pattern;
// $pattern=str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route);
// echo "<br>";
// $pattern='/^'.$pattern.'$/';
// echo $pattern;


