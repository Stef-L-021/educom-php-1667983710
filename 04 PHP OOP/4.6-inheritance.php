<?php

/*
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.
*/

class Fruit {
    public $name;                                       // Omdat Strawberry t child is van Fruit kan t deze 2 ook gebruiken.
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// stawberry is inherited from Fruit
class Strawberry extends Fruit {                        // The strawberry class is a child of the Fruit class.
    public function message() {
        echo "Am I a fruit or a berry? ";
        // de eerdere intro zal niet werken omdat die protected is. Daarom zetten we m in deze function.
        $this->intro();
    }
}

// 3 output:
$strawberry = new Strawberry("Strawberry", "Red");      // die maakt de construct aan
$strawberry->message();                                 // echo-ed message "Am I a fruit or a berry"
// $strawberry->intro();                                   // echo-ed intro "The fruit is ..."


?>