<?php

class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {           // PHP will automatically call this function when you create an object from a class.
        $this->name = $name;
        $this->color = $color;
    }                                               // Nu hoeven we niet de set functie te gebruiken.
    function get_name() {                   
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit("Apple", "Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

?>