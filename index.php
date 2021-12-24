<?php
include "bootstrap/init.php";

use App\Utilities\Asset;
use App\Utilities\Url;
use App\Utilities\Lang;
//echo "<link rel='stylesheet' href='".asset_url('css/main.css')."'>";

echo Asset::get("css/style.css");
echo "<br>";
echo Asset::css("style.css");
echo "<br>";
echo Url::current();
echo "<br>";
echo Url::current_route();
echo "<br>";
echo "<br>";
echo "<br>";

$str_pr="در هر سال شمسی ۱ ماه وجود دارد که میتواند ...";
echo "<br>";
echo $str_pr;
echo "<br>";
echo Lang::to_Latin_num($str_pr);


echo "<br>";
echo "<br>";
echo "<br>";



$str_en="در هر سال شمسی 1 ماه وجود دارد که میتواند ...";
echo "<br>";
echo $str_en;
echo "<br>";
echo Lang::to_persian_num($str_en);