<?php

class Person
{
    public function greet()
    {
        return "Hola $this->name</br>";
    }
    public function farewell()
    {
        return "Adios $this->name";
    }
}
