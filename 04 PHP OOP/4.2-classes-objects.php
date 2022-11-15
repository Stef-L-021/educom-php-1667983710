<?php

class Fruit {
    //Properties
    public $name;                       // in a class variables are called properities
    public $color;

    // Methods
    function set_name($name) {          // functions are called methods
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();                   // instances of the class fruit
$banana = new Fruit();                  // instances of the class fruit
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";


$apple = new Fruit();                   // instance of the class fruit
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .$apple->get_color();

// PHP The $this Keyword
echo "<br>";

class Fruit2 {
    public $name;
    function set_name($name) {
        $this->name = $name;
    }
}
$apple = new Fruit2();
$apple->set_name("Apple");

echo $apple->name;

// insanceof

echo "<br>";
$apple = new Fruit();
var_dump($apple instanceof Fruit);

?>