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

if($result->num_rows >0) {     
    echo "<table border='5'>
        <tr>    
            <th> ID </th>
            <th>Name</th>
        <tr>";
        //output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr> 
                <td>" .$row["id"]. "</td>
                <td>" .$row["firstname"].
                " "
                .$row["lastname"]. "<td>
            <tr>";
        }
        echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>