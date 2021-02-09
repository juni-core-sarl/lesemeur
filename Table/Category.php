<?php

namespace App\Table;

class Category extends Table
{
    protected static $table = "categories";

    public function getUrl()
    {
        return "index.php?p=category&id=" . $this->id;
    }
}
