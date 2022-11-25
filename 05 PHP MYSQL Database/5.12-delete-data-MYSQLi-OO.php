<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

// Dit gedeelte doet niks want het zal altijd zeggen dat t is verwijderd.
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    "Error deleting record: " . $conn->error;
}

$conn->close();
?>