<?php
require_once 'Animal.php';
require_once 'Gos.php';
require_once 'Gat.php';


$animalGeneral = new Animal("Animal"); 
$gos = new Gos("Perrete");                       
$gat = new Gat("Gatete");                       


$animalGeneral->makeSound();
$gos->makeSound();
$gat->makeSound();
?>