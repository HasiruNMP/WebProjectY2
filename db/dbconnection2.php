<?php


/* DONT CHANGE THIS */


$conn=mysqli_init(); 

mysqli_real_connect($conn, "hnmpsqls.mysql.database.azure.com", "ssadmin@hnmpsqls", "p?+uG[Ut@g,4+ujM",NULL, 3306);

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

?>

