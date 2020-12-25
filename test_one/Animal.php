<?php
// function
class Animal{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function sayName(){
        return "Hello $this->name";
    }

    static function info(){
        return "Animal class";
    }
}

$dog = new Animal("Boddy");
echo $dog->sayName().'<br>';
echo Animal :: info();

class Cat extends Animal{

}

$cat = new Cat("Mimi");
echo $cat->sayName();