<?php

// Static properties can be called directly - without creating an instance of a class.
// Static properties are declared with the static keyword:

class pi {
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;                         // classname:static_variable
echo "<br>";

// More on static properties

class TheCoolerPie {
    public static $value=3.14159*2;
    public function staticvalue() {
        return self::$value;
    }
}
$THeCoolerPie = new TheCoolerPie();
echo $THeCoolerPie->staticvalue();
echo "<br>";

// To call a static property from a child class, use the parent keyword inside the child class:

class TheEvenCoolerPie {
    public static $value=3.14159*3;
}

class x extends TheEvenCoolerPie{
    public function xStatic() {
        return parent::$value;
    }
}

// Get value of static property direcly from child class
echo x::$value;
echo "<br>";

// Or get is from xStatic method:
$x = new x();
echo $x->xStatic();

?>