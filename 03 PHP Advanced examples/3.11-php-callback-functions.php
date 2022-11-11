<!-- A callback function (often referred to as just "callback") is a function which is passed as an argument into another function. -->

<?php

function my_callback($item) {
    return strlen($item);
}

$strings = ["apple","orange","banana","coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

<!-- Callbacks in User Defined Functions -->

<?php
echo "<br>";

function exclaim($str) {
    return $str . "! ";
}

function ask($str) {
    return $str . "?";
}

function printFormatted($str, $format) {
    echo $format($str);
}

printFormatted("hello world", "exclaim");
printFormatted("hello world", "ask");
?>