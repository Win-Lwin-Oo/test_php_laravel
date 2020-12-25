<?php
// class
class Test
{
    public $name;
}

$dog = new Test;
$dog->name = "Boddy";
echo $dog->name . '<br>';

$dog->leg = 4;
echo $dog->leg;
