<?php

$servername = "localhost";
$username= "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    // use exec() because no reslults are returned
    $conn->exec($sql);
    echo "Database created successfullly<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
