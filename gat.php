<?php

require_once 'Animal.php';

class Gat extends Animal {
   
    public function makeSound() {
        echo "{$this->name} diu: Meu!\n";
    }
}
?>
