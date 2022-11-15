<?php

/*
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class
*/

/*
class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango';     // OK
$mango->color = 'Yellow';   // ERROR
$mango->weight = '300';     // ERROR
*/

class Fruit {                           // hier zijn ze aan het begin allemaal public
    public $name;
    public $color;
    public $weight;

    function set_name($n) {
        $this->name = $n;                   // Dit blijft een public functie
    }
    protected function set_color($n) {      // public --> protected
        $this->color = $n;
    }
    private function set_weight($n) {       // public --> private
        $this->weight = $n;
    }
}

$mango = new Fruit();
$mango->name = 'Mango';     // OK
$mango->color = 'Yellow';   // ERROR        voor de een of andere reden krijg ik bij deze 2 geen error
$mango->weight = '300';     // ERROR
?>
