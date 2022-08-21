<?php

namespace Nihatavci\PttavmCase\Configs;

class Database
{
    private static $file = '/../../products.json';

    public static function products()
    {
        return self::$file;
    }

    public static function GetAll(): array
    {
        return json_decode(file_get_contents(__DIR__ . self::products()), 1);
    }
}