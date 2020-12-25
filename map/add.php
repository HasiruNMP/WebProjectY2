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

$croptype = $_POST["ctype"];
$quantity = $_POST["qunt"];
$descrip = $_POST["desc"];
$latitude = $_POST["lati"];
$longitude = $_POST["longi"];
$img= $_FILES['image']["name"];
$temp_name= $_FILES['image']["tmp_name"];
$path = move_uploaded_file($temp_name, destination:"C:/xampp/htdocs/dashboard/map/img/". $img);

echo "<br>". $croptype . "<br>" . $quantity ."<br>" . $descrip .  "<br>"  . $latitude . "<br>"   . $longitude . "<br>". $img . "<br>";

?>
