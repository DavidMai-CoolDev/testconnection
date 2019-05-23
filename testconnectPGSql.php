<?php

$conn = pg_connect("host=ec2-35-176-146-52.eu-west-2.compute.amazonaws.com port=5432
 dbname=mydb user=mydb password=mydb");
if (!$conn) {
 echo "An error occurred111111111111.\n";
 exit;
}

$result = pg_query($conn, "SELECT * FROM playground");
if (!$result) {
 echo "An error occurred222222222222.\n";
 exit;
}

while ($row = pg_fetch_row($result)) {
 echo "value1: $row[0] value2: $row[1] value3: $row[2] value4: $row[3] value5: $row[4]";
 echo "<br />\n";
}

?>
