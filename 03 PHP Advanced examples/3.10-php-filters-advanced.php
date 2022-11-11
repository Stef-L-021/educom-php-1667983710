<!-- validate an integer within a range -->

<?php

$int = 122;
$min = 1;
$max = 200;

if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo("variable value is not within the legal range");
} else {
    echo("variable value is within the legal range");
}
?>

<!-- Validate IPv6 Adress: -->

<?php
echo "<br>";

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 adress");
} else {
    echo("$ip is not a valid IPv6 adress");
}

?>

<!-- Validate URL - Must Contain QueryString -->

<?php
echo "<br>";

$url = "https://www.w3schools.com";

if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid url with a query string");
} else {
    echo("$url is not a valid URL with a query string");
}
?>

<!-- Remove Characters With ASCII Value > 127 -->

<?php
echo "<br>";

$str = "<h1> Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);                             // Even though it's depreciated, it still works
echo $newstr;
?>