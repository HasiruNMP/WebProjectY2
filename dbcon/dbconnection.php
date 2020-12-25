<?php
$servername = "remotemysql.com";
$username = "dD4aW06XoB";
$password = "vs5A4WwSFr";
$dbname = "dD4aW06XoB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




?>