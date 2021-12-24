<?php
namespace App\Utilities;
class Lang{
    public static function to_Latin_num(string $string):string
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
    
        $num = range(0, 9);
        $string = str_replace($arabic, $num, $string);
        $string = str_replace($persian, $num, $string);
      
        return $string;
    }
    
    public static function to_persian_num(string $string):string
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    
        $num = range(0, 9);
        $string = str_replace($num, $persian, $string);
      
        return $string;
    }
}