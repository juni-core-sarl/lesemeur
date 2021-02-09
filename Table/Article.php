<?php

namespace App\Table;

use App\Factory;

class Article
{

    public static function getLast()
    {
        return Factory::getDatabase()->query("SELECT article.id, article.title, article.contenu, categories.titre as category   FROM article
        
        JOIN categories on id_category = categories.id", __CLASS__);
    }


    public function getUrl()
    {
        return "index.php?p=article&id=" . $this->id;
    }

    public function getExtrait()
    {

        return $this->contenu;
    }
}
