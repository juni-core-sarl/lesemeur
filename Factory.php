<?php

namespace App;

class  Factory
{

    const DB_NAME = 'article';
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';
    static $database;

    public static function getDatabase()
    {
        if (self::$database === null) {
            self::$database = new Database(self::DB_HOST, self::DB_NAME, self::DB_USER, self::DB_PASS);
        }
        return self::$database;
    }
}
