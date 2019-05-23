<?php echo 'Hello anh em'; ?>
<?php
      $servername = "localhost";
      $username = "root";
      $password = "Nbulll1!";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password);

      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "Nbulll1!";
$dbname = "sys";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT variable,value FROM sys_config";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "variable: " . $row["variable"]. " - value: " . $row["value"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
