<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result=$conn->query($sql);                                 // This runs the SQL query and puts the resulting data into the variable results

if($result->num_rows >0) {                                  // Checks if more than 0 rows are returned
    //output data of each row
    while($row = $result->fetch_assoc()) {                  // puts all the results into an associative array that we can loop through
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();





?>