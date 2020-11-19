<?php

class Str 
{
    public static function upper($string)
    {
        return mb_strtoupper($string);
    }

    public static function lower($string)
    {
        return mb_strtolower($string);
    }

    public static function length ($string)
    {
        return mb_strlen($string);
    }
}

echo Str::upper("toto est super");