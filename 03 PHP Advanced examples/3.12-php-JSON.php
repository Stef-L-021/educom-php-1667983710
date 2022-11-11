<!-- PHP - json_encode() -->

<?php

$age = array("Peter" =>35, "Ben" => 37, "Joe" => 43);       // encode an associative array into a JSON object
echo json_encode($age);

echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");                    // encode an indexed array into a JSON array
echo json_encode($cars);

// PHP - json_decode()
echo "<br>";
$jsonobj= '{"Peter": 35, "Ben":37, "Joe":43}';              // decodes JSON data into a PHP object:
var_dump(json_decode($jsonobj));

echo "<br>";
$jsonobj= '{"Peter": 35, "Ben":37, "Joe":43}';              // decodes JSON data into a PHP associative array
var_dump(json_decode($jsonobj, true));

// PHP - Accessing the Decoded Values

echo "<br>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';                // access the values from a PHP object:

$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;


echo "<br>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);                          // access the values from a PHP associative array:

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];


// PHP - Looping Through the Values

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

echo "<br>";    
$obj = json_decode($jsonobj);                               // how to loop through the values of a PHP object:
foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

$arr = json_decode($jsonobj, true);                         // how to loop through the values of a PHP associative array:
foreach($arr as $key => $value) {
    echo $key . " => " . $value ."<br>";
}

?>
