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

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");           // Op de plaatsen van ? wordt het straks vervangen
$stmt->bind_param("sss", $firstname, $lastname, $email);                                                // binds the parameter to the SQL query
// By telling  SQL what type of data we expect, we minimize the risk. 
// The 's' tells SQL that it's a string. Other alternatives are:
// i integer
// d double
// s string
// b blob

// set parameter and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@email.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@email.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@email.com";
$stmt->execute();

echo "new records created successfully";

$stmt->close();
$conn->close()
?>