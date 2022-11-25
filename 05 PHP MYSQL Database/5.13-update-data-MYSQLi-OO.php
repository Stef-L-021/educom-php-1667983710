<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname = 'Dod'WHERE id=7"; // If not for the where statement, all columns with id=2 would be changed.

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating records: " . $conn->error;         // Dit doet niks, zelf als je een id pakt die niet bestaat geeft tie een success message
}

$conn->close();

?>