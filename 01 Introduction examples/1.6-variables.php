<?php
$txt = "W3Schools.com!";
echo "I Love $txt!";
// Of:
echo "I Love " . $txt . "!";

$x=5;                           // global scope variable
$y=10.5;
echo "$x + $y = ";              // Voor tekst met je "" gebruiken
echo $x + $y;                   // voor berekeningen juist niet

/*
function myTestx() {
    echo "<p> variable x inside function is: $x </p>";
}
*/

function myTestz(){
    $z = 5;                      // Local scope variable, can only be accessed from within that function. Je kan dus meerder local values hebben met dezelfde naam in verschillende functies
    echo "<p> variable x inside function is: $z </p>";      // alles binnen <p> werkt voor de een of andere rede niet
}


function myTest(){
global $x, $y;
$y=$x+$y;                // Local variable y = global variable x + y
// echo $y;              // Je kan het ook binnen de functie in 1 keer printen
}

myTest();               // hiermee echo je de local variable y van hierboven ipv de global variant
echo "Dit is de myTest echo $y";

                        // hoe geef ik aan dat ik niet meer naar die functie wil kijken, maar de global y kan zien

function bobby () {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo $GLOBALS['x'];
}

bobby ();
echo "global y= ";
echo $GLOBALS['y'];

?>