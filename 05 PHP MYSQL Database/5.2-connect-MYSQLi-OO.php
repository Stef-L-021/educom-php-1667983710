<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->conect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>