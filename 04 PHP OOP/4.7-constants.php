<?php

/*

Constants cannot be changed once it is declared.

Class constants can be useful if you need to define some constant data within a class.

A class constant is declared inside a class with the const keyword.

Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:

*/

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";         // hier wordt de constant aangemaakt
}

echo Goodbye::LEAVING_MESSAGE;                      // hier wordt de constant gebruikt buiten de class met "Class-naam::constantname

echo "<br>";
// We kunnen ook

class Goodbye2 {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";     //Zelfde
    public function byebye() {                                          // hier maken we een functie binnen de class
        echo self::LEAVING_MESSAGE;                                     // en die functie doet hier de echo
    }
}

$goodbye = new Goodbye2();                                              // Hier roepen we de class aan
$goodbye->byebye();                                                     // hier voeren we de functie uit van die class
?>