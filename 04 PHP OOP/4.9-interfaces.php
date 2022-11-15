<?php

// Interfaces allow you to specify what methods a class should implement.
// Interfaces are declared with the interface keyword
// A class that implements an interface must implement all of the interface's methods

interface InterfaceName {
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3() : string;
}

///////////////////////////////////

// Interface definition
interface Animal {
    public function makeSound();
}

// Class definitions
class Cat implements Animal {
    public function makeSound() {
        echo " Meow ";
    }
}
class Dog implements Animal {
    public function makeSound() {
        echo " Bark ";
    }
}
class Mouse implements Animal {
    public function makeSound(){
        echo " Squeak ";
    }
}

// Create a list of animals:
$cat = new Cat();                           // We maken hier 3 nieuwe variables eerst los aan
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);       // en voegen ze dan samen in een array

// Tell the animals to make a sound
foreach($animals as $animal) {
    $animal->makeSound();
}


/* oude methode, werkt alleen voor cat
$animal = new Cat();
$animal->makesound();
*/
?>