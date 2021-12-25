<?php

define("BASEPATH",__DIR__."/../");
define("PROJECTNAME","پایا فریمورک");
include BASEPATH . "/vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();
include BASEPATH."/helpers/helper.php";
$request=new \App\Core\Request();
include BASEPATH . "/routes/web.php";

