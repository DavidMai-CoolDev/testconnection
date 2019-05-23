<?php
$dbServerName = "0.0.0.0:3306";
$dbUsername = "duy";
$dbPassword = "!1lllubN";
$dbName = "sys";
// $dbPort = "3306";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
