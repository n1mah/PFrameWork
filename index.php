<?php
use  App\Core\Request;
include "vendor/autoload.php";

echo $_SERVER["REQUEST_URI"];
echo "<br>";
$r=new Request();
echo "<br>";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
echo "<pre>";
print_r($_ENV);
echo "/<pre>";
