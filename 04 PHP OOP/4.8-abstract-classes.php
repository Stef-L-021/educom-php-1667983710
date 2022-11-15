<?php

// An abstract class is a class that contains at least one abstract method. 
// An abstract method is a method that is declared, but not implemented in the code.
// An abstract class or method is defined with the abstract keyword

/// Voorbeeld 1
abstract class ParentClass {
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3() : string;
}
/// Voorbeeld 2

// parent class
abstract class car {                            // nieuwe abstract class maken.
    public $name;                               // nieuwe values toevoegen

    public function __construct($name) {        // 
        $this->name = $name;
    }
    abstract public function intro() : string;
}

// child classes:
class Audi extends Car {                                            // Voegt child audi tot aan car
    public function intro(): string {                               // voegt een string toe aan eerder aangemaat functie intro
        return "Choose German quality! I'm a $this->name!";         // dit wordt later ge-echo-ed
    }
}
class Volvo extends Car {
    public function intro(): string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}
class Citroen extends Car {
    public function intro() : string {
        return "French extravagane! I'm a $this->name!";
    }
}

// create objects (echo them) from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

// The Audi, Volvo, and Citroen classes are inherited from the Car class. 
// This means that the Audi, Volvo, and Citroen classes can use the public $name property as well as the public __construct() method from the Car class because of inheritance.
// But, intro() is an abstract method that should be defined in all the child classes and they should return a string.
echo "<br>";

abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name) {         // maakt een nieuwe public functie in de Child class
        if ($name == "John Doe") {          
            $prefix = "Mr.";                     // dan wordt de nieuwe var prefix ...
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{prefix} {$name}";
    } // Einde prefixname Functie
} // einde ChildClass

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>