<?php

namespace App;

class Module
{

    public static function table()
    {
        return "modules";
    }

    public static function getAll()
    {
        $connection = new Connection();
        return $connection->sql(self::class);
    }

}

