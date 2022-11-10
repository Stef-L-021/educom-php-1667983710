<?php

// Exercise 1: Create a switch statement that will output "Hello" if $color is "red", and "welcome" if $color is "green".

switch ($color) {
    case "red":
        echo "Hello";
        break;
    case"green":
        echo "Welcome";
        break;
}

// Exercise 2: Add a section that will output "Neither" if $color is neither "red" nor "green".

switch ($color) {
    case "red":
      echo "Hello";
      break;
    case "green":
      echo "Welcome";
      break;
    default:
      echo "Neither";
}

?>