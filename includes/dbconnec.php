<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "life_stream";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  exit();
}
echo "<script>console.log(\"Connected successfully\")</script>";

