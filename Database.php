<?php

namespace App;

use PDO;

class Database
{
    private $user;
    private $password;
    private $dbname;
    private $host;
    private $pdo;


    public function __construct($host, $dbname, $user, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }

    private  function getDb()
    {
        if ($this->pdo === null) {
            $pdo =  new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;
    }


    public function query($statment, $class_name)
    {
        $query = $this->getDb()->query($statment);
        $datas = $query->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }

    public function  prepare($stament, $options, $class_name, $only = false)
    {
        $req = $this->getDb()->prepare($stament);
        $req->execute($options);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($only) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        }

        return $data;
    }
}
