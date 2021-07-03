<?php
$server = "127.0.0.1";
$usrname = "root";
$pass = "";
$dbname = "login";

// Create connection
$conn = new mysqli($server, $usrname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>