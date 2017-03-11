<?php
  //function injects_safe($string) {
  //  return mysql_real_escape_string($string);
  //}

  //function results_assoc($result) {
  //  $tmp = Array();
  //  while($row = mysql_fetch_assoc($result)) {
  //    array_push($tmp, $row);
  //  }
  //  return $tmp;
  //}
  //riesil som z domu
 $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
  }
?>
<?php include 'header.php'; ?>


         