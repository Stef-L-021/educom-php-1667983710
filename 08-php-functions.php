<?php

// Exercise 1: Create a function named myFunction.

function myFunction() {                                 // function dan de function naam(mogelijke input)
    echo "Hello World!";                                // hier komt de output
  }

// Exercise 2: Call (execute) a function named myFunction.

function myFunction2() {
  echo "Hello World2!";
}

myFunction2();

// Exercise 3: Inside a function with two parameters, print the first parameter.

function myFunction3($fname, $lname) {                   // in dit geval heeft t 2 input
    echo $fname;
}

// Exercise 4: Let the function return the second value.

function myFunction4($fname, $lname) {
    return $lname;                                         // dit doet $lname opslaan, maar niet weergeven
}
?>