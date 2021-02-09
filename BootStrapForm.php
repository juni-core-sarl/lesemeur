<?php

namespace App;

class BootStrapForm
{


    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    private function getValue($name)
    {
        return isset($this->data[$name]) ? $this->data[$name] : '';
    }

    private function surrond($label, $html)
    {
        return "<div class=\"form-group\"><label>$label</label>
        $html
        </div>";
    }


    public function input($label, $name)
    {
        return $this->surrond($label, '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control">');
    }

    public function submit()
    {
        return '<button type="submit" class="btn btn-primary">Envoyer</button>';
    }
}
