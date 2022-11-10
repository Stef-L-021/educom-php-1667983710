<?php

// Exercise 1: while loop: Output $i as long as $i is less than 6.
$i = 1; 

while ($i < 6) {
    echo $i;
    $i++;
}

// Exercise 2: do while loop: Output $i as long as $i is less than 6.
    $i = 1; 

do {
    echo $i;
    $i++;
} while ($i < 6);


// Exercise 3: for loop: Create a loop that runs from 0 to 9.
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

// Exercise 4: foreach: 

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
    echo $x;
}

?>