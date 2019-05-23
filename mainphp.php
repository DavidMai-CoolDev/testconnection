<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome Bros</title>
    <link rel="stylesheet" type="text/css" href="/style/mainpage.css">
    <!-- <link rel="stylesheet" type="text/css" href="file:///var/www/html/style/mainpage.css"> -->

  </head>
  <body>

    <div class="container">
      <?php echo 'Hello anh em'; ?>
      <div class="pageheader">

        <a href="/pagelayouts/about.php">About</a>
        <a href="/pagelayouts/contact.php">Contact</a>
      </div>

      <div class="themap">
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
      </div>

      <div class="leftstatistic">
        <?php include 'config.php';
        echo $config["db"]["db1"]["username"];
        echo '</br>' ;
        echo sizeof($config);
        foreach ($config["db"] as $value) {
          // echo "$value["username"] <br>";
          echo "dbname: " . $value["dbname"]. " - username: " . $value["username"]. "<br>";
          }
         ?>

      </div>

      <div class="rightstatistic">

      </div>

      <div class="understatistic">

      </div>

      <div class="extrainformation">

      </div>
    </div>
  </body>
</html>
