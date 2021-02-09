<?php

namespace App\Table;

use App\Factory;

class Table
{

    protected static $table;

    public static function All()
    {

        return Factory::getDatabase()->query("SELECT * FROM " . static::$table . "", get_called_class());
    }

    public static find($id){
        
        return Factory::getDatabase()->prepare("SELECT * FROM ".static::$table."WHERE id = ?", [$id], get_called_class(),true);
    }
}
