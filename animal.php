<?php

abstract class Animal {
   
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract function makeSound();
}
?>
