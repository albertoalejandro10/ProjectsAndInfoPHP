<?php

class User //Si una clase tiene el atributo final es que es una clase que no se puede heredar sus propiedades; igual sucede si algun metodo tiene ese atributo.
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{
    public function getName()
    {
        return "Soy $this->name";
    }
}

$admin = new Admin('Betox');
echo $admin->getName();
