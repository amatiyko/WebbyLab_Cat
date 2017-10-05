<?php
class Animal {
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Cat extends Animal {
    public function meow() {
        return "Cat {$this->getName()} is saying meow";
    }
}

$cat = new Cat('garfield');
var_dump($cat->getName () === "garfield");
var_dump($cat->meow () === "Cat garfield is saying meow");