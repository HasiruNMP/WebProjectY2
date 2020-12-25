<?php
$host ="localhost";
$user="root";
$password="";
$db="map";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con)
{
	die("Db error");
	return 0;
}
echo "<br> Connected!";

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
