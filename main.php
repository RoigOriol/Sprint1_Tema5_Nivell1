<?php

require_once 'Gos.php';
require_once 'Gat.php';

$gos = new Gos("Perrete");                       
$gat = new Gat("Gatete");                       

$gos->makeSound();
$gat->makeSound();
?>