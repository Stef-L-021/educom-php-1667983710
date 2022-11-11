<!DOCTYPE html>
<html>
<body>

<?php

// String 
$x = "Hello world!";
$y = "hello world!";

echo $x;
echo "<br>";
echo $y;

// Integer a non-decimal number between -2,147,483,648 and 2,147,483,647.

$xint = 5985;
echo "<br> xint is: ";
var_dump($xint);            // returns the data type and value:

//Float  number with a decimal point or a number in exponential form

$xfloat = 10.365;
echo "<br> xfloat is: ";
var_dump($xfloat);

// Boolean represents two possible states: TRUE or FALSE.

$xboo= true;
$yboo= false;

// Array stores multiple values in one single variable

$cars = array("Volvo", "BMW", "Toyota");
echo "<br> cars is: ";
var_dump($cars);

/* Object
Classes and objects are the two main aspects of object-oriented programming.
A class is a template for objects, and an object is an instance of a class.
When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
*/

class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {                                   // de omzet functie
        $this->color = $color;
        $this->model = $model;
    }
    
    public function message(){
        return "My car is a " . $this->color . " " . $this->model . "!";            // de message functie
    }

} // Einde class car

echo "<br>";
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car ("red", "Toyota");
echo $myCar -> message();

// NULL Value

$xnull = "Hello world!";
$x = null;
echo "<br>";
var_dump($x);

?>
</body>
</html>