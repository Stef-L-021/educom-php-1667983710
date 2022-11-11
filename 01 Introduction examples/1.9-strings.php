<!DOCTYPE html>
<html>
<body>

<?php
echo strlen("Hello world!");                // character count
echo "<br>";
echo str_word_count("Hello world!");        // Word count
echo "<br>";
echo strrev("Hello world!");                // Reverses the string
echo "<br>";
echo strpos("Hello world!", "world");       // gives position of word
echo "<br>";
echo str_replace("world", "Dolly", "Hello world");      // Replaces world with Dolly
?>