<?php
  function injects_safe($string) {
    return mysql_real_escape_string($string);
  }

  function results_assoc($result) {
    $tmp = Array();
    while($row = mysql_fetch_assoc($result)) {
      array_push($tmp, $row);
    }
    return $tmp;
  }

  $dbhost = "localhost";
  $dbusername = "cestovanie";
  $dbpassword = "cestovanie";
  $dbname = "cestovanie";

  $conn = mysql_connect($dbhost, $dbusername, $dbpassword);
  if (!$conn) {
    return false;
    die("MYSQL ERROR >> ".mysql_error());
  }
  mysql_select_db($dbname,$conn);

  if (isset($_POST['feedback'])) {
    $nick = injects_safe($_POST['nick']);
    $email = injects_safe($_POST['email']);
    $text = injects_safe($_POST['message']);
    $my_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO feedback ("
      . "nick, email, message, date_time"
      . " ) VALUES ('"
      . $nick."','"
      . $email."','"
      . $text."', '".$my_date."')";
    // echo $sql;
    mysql_query($sql, $conn);
  /*  header('Location: feedback.php');
    exit;   */
  }
?>
<?php include 'header.php'; ?>


         