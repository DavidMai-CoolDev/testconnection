<?php
$dbServerName = "ec2-3-15-72-50.us-east-2.compute.amazonaws.com:3306";
$dbUsername = "duymai";
$dbPassword = "nb123";
$dbName = "books";
// $dbPort = "3306";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "SELECT * FROM authors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
