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

$sql = "SELECT * FROM MyGuests LIMIT 5 OFFSET 5";
// kan ook getypt worden als: LIMIT 5, 5";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='5'>
        <tr>
            <th> ID </th>
            <td> Name </th>
        </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" .$row["id"]. "</td>
                <td>" .$row["firstname"]. " ".$row["lastname"]. "</td>
            </tr>";
        }
        echo "</table>";
} else { 
    echo "Error showing table: " . $conn->error;
}

$conn->close();
?>