<?php
include("autoload.php");

$food = new Food();
$food-> info();

echo ('<br>');

$dog = new Dog();
echo $dog->run();