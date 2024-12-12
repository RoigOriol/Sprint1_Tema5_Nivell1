<?php
require_once 'Gos.php';
require_once 'Gat.php';

echo "Gos fa: ";
$gos = new Gos();
$gos->makeSound();

echo "Gat fa: ";
$gat = new Gat();
$gat->makeSound();
?>
