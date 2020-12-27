<?php
$servername = "remotemysql.com";
$username = "dD4aW06XoB";
$password = "vs5A4WwSFr";
$dbname = "dD4aW06XoB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno())
{
	echo mysqli_connect_errno();
	die();
}






$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$cropname = $_POST["cropnme"];
$croptype = $_POST["cropt"];
$quantity = $_POST["qunt"];
$descrip = $_POST["desc"];
$latitude = $_POST["lati"];
$longitude = $_POST["longi"];
$img=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img);

echo  "<br>" . $firstname . "<br>". $lastname . "<br>" . $email . "<br>" . $cropname . "<br>". $croptype . "<br>" . $quantity ."<br>" . $descrip .  "<br>"  . $latitude . "<br>"   . $longitude . "<br>". $img . "<br>";


if(isset($_REQUEST["submit"]))
{


$query="INSERT INTO reports (email, fname, lname, crop_name, crop_type, photos, lat, longt, description) VALUES ('$email', '$firstname', '$lastname', '$cropname', '$croptype', '$img', '$latitude', '$longitude', '$descrip');";
}

 if($conn->query($query))
 {
 	echo "<h1><center>Your order has been sucessfully recorded !</center></h1>";
 }
 else
 	echo "error";



?>



