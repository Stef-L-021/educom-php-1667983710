<?php
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
        return "{$prefix} {$name}";
    } // Einde prefixname Functie
} // einde ChildClass

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>