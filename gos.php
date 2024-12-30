<?php

require_once 'Animal.php';

class Gos extends Animal {
    
    public function makeSound() {
        echo "{$this->name} diu: Bup, bup!\n";
    }
}
?>
