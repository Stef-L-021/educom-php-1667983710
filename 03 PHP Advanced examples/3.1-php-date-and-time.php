<?php

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

?>

<br>
&copy; 2010-<?php echo date("Y");           // om copyright toe te voegen 
?>
     
<?php
"<br>";                                     // waarom spring je nniet naar de volgende line???
echo "The time is " . date("h:i:sa");

echo "<br>";
$d = mktime(11, 14, 54, 8, 12, 2014);                       // (hour, minute, second, month, day, year)
echo "Created date with mktime is " . date("Y-m-d h:i:sa", $d);

// strtotime

echo "<br>";
$e = strtotime("10:30pm April 15 2014");
echo "Created date with strtotime is " . date("Y-m-d h:i;sa", $e);

echo "<br>";
$f = strtotime("tomorrow");
echo "Created date tomorrow is " . date("Y-m-d h:i;sa", $f);

echo "<br>";
$g = strtotime("next Saturday");
echo "Created date next Saturday is " . date("Y-m-d h:i;sa", $g);

echo "<br>";
$h = strtotime("+3 Months");
echo "Created date +3 Months is " . date("Y-m-d h:i;sa", $h);

echo "<br>";
$startdate = strtotime("Saturday");
$enddate= strtotime("+6 weeks", $startdate);                                // 6 weken na die zaterdag

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);                          // telt steeds 1 week op bij de startdate totdat voldaan wordt aan de while
}

$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo  "There are " . $d2 ." days until 4th of July.";

?>

