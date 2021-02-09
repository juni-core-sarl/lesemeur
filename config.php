<?php

namespace App;

class Config
{
    public $settings = [];

    public function __construct()
    {
        $this->settings = require dirname(__DIR__) . '/config.php';
    }
}
