<?php

class Char
{
    public static $a = "this is static method";


    public static function b()
    {
        return "this is static function";
    }


    public static function c()
    {
        return self::$a . self::b();
    }
}
