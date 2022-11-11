<?php

// Integers
$a = 5985;
var_dump(is_int($a));       // je kan hier wrs ook echo voor gebruiken, maar dan weet je wel niet het datatype (in dit geval bool)

$b= 59.85;
var_dump(is_int($b));

// Floats
$c = 10.365;
var_dump(is_float($c));

// Infinity
$d = 1.9e411;
var_dump($d);

// NaN
$e = acos(8);
var_dump($e);

// Numerical Strings
$f = 5985;
var_dump(is_numeric($f));   // true

$g = "5985";
var_dump(is_numeric($g));   // true

$h = "59.85" + 100;
var_dump(is_numeric($h));   // true

$i = "Hello";
var_dump(is_numeric($i));   // false

// Casting Strings and Floats to Integers

// Cast float to int
$j = 23465.768;
$int_cast = (int)$j;
var_dump($int_cast);

echo "<br>";

// Cast string to int
$k = "23465.768";
$int_cast = (int)$k;
var_dump($int_cast);
?>