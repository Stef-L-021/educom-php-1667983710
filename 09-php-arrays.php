<?php

// Exercise 1: Use the correct function to output the number of items in an array.

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);


// Exercise 2: Output the second item in the $fruits array.

$fruits = array("Apple", "Banana", "Orange");
echo $fruits[1];


// Exercise 3: Create an associative array containing the age of Peter, Ben and Joe.

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "<br>";


// Exercise 4: Here you see an associative array. Output "age" of Ben.

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . $age['Ben'] . " years old.";                               //om de value te krijgen pak je de variable naam en geef je de named keys aan 
echo "<br>";


// Exercise 5: Loop through an associative array and output the key and the value.

foreach($age as $x => $y) {                                                 // om een associate array te loopen gebruik je foreach, voor een indexed array gebruik je for
    echo "Key=" . $x . ", Value=" . $y;
    echo "<br>";
}


// Exercise 6: Use the correct array method to sort the $colors array alphabetically.

$colors = array("red", "green", "blue", "yellow"); 
sort($colors);


// Exercise 7: Use the correct array method to sort the $colors array descending alphabetically.

$colors = array("red", "green", "blue", "yellow"); 
rsort($colors);


// Exercise 8: Use the correct array method to sort the $age array according to the values.

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);                                                    // arsort voor descending order
?>