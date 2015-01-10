<?php

namespace MatthiasnobackWorkshop\GroningenPHP;

class Workshop
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}
