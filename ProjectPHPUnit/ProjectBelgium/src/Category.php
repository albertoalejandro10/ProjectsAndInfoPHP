<?php

namespace App;

class Category
{
    protected $name;

    public function add_name(String $name){
        $this->name = $name;
    }

    public function get_name(): string{
        return $this->name;
    }
}