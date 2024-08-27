<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vu";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
   // echo "Connected successfully";
  //  print_r($conn);
}
//mysqli_set_charset( $connection, 'utf8');
/* change character set to utf8mb4 */
mysqli_set_charset($conn,"utf8mb4");
?>