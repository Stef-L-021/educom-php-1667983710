<?php
abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    // The child class may define optional arguments that are not in the parent's abstract method 
    public function prefixName($name, $seperator = ".", $greet = "Dear") {        
        if ($name == "John Doe") {          
            $prefix = "Mr.";                     // dan wordt de nieuwe var prefix ...
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$seperator} {$name}";
    } // Einde prefixname Functie
} // einde ChildClass

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>